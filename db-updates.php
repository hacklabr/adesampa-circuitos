<?php
$app = MapasCulturais\App::i();
$em = $app->em;
$conn = $em->getConnection();

return array(
    'terms lojas circuitos adesampa' => function() use($conn){    

        /*
        $conn->executeQuery("DELETE FROM term_relation");
        $conn->executeQuery("DELETE FROM term");
        */

        $terms = json_decode(file_get_contents(__DIR__ . '/segmentos.json'));
        foreach($terms as $term) {
            $conn->executeQuery("insert into term (taxonomy, term) values (2, '$term')");
        }

        $conn->executeQuery("insert into term (taxonomy, term) values (20, 'Brás')");
        $conn->executeQuery("insert into term (taxonomy, term) values (20, 'Santa Ifigênia')");
        $conn->executeQuery("insert into term (taxonomy, term) values (20, 'Bom Retiro')");
        $conn->executeQuery("insert into term (taxonomy, term) values (20, '25 de março')");

        return true;
    },

    'lojas circuitos adesampa' => function() use($conn){
        $lojas = json_decode(file_get_contents(__DIR__ . '/lojas.json'));
        
        $count = 0;

        $status = 1;
        $type = 1900;
        $agent_id = 1;

        /*
        $conn->executeQuery("delete from term_relation where object_id > 2");
        $conn->executeQuery("delete from space_meta where object_id > 2");
        $conn->executeQuery("delete from space where id > 2");
        */

        foreach($lojas as $loja) {

            $count++;

            $id = $conn->fetchColumn("SELECT nextval('space_id_seq'::regclass)");
        
            $lat = $loja->location->coordinates->lat;
            $lng = $loja->location->coordinates->lng;
            $location = "(" . $lng . "," . $lat . ")";
            echo $loja->nome . "\n";

            $conn->executeQuery("
                    INSERT INTO space (
                         id, location,  name,  status,  type,  agent_id,  is_verified,  public, _geo_location
                    ) VALUES (
                        $id, '$location', '$loja->nome', $status, $type, $agent_id, true, false, ST_GeographyFromText('POINT($lat $lng)')
                    )
                ");

            foreach ($loja->segmentos as $segmento) {
                //$term_id = array_search($segmento, $terms);
                $term_id = $conn->fetchColumn("SELECT id from term where term='$segmento'");
                if (!$term_id) {
                    echo "SELECT id from term where term='$segmento'\n";
                }
                $conn->executeQuery("INSERT INTO term_relation (term_id, object_type, object_id) values ($term_id, 'MapasCulturais\Entities\Space', $id)");
            }

            foreach($loja->metadata as $key => $val){
                $conn->executeQuery("
                        INSERT INTO space_meta (
                            object_id, key, value
                        ) VALUES (
                            '$id', '$key', :val
                        )", ['val' => $val]);
            }
            
        }

        return true;

        
    },

);