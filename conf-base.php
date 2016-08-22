<?php

$subdomain = $theme_class::getSubdomain();

$conf = [];

if(isset($theme_class::$subdomains[$subdomain])){
    $cfg = $theme_class::$subdomains[$subdomain];
    $conf['maps.zoom.default'] = $cfg['zoom'];
    $conf['maps.center'] = $cfg['center'];
}

return array_merge([
//    // latitude,longitude do centro do mapa da busca e do mapa da criação de agentes e espaços

        'app.enabled.agents'   => false,
        'app.enabled.spaces'   => true,
        'app.enabled.projects' => false,
        'app.enabled.events'   => false,
        'app.enabled.apps'     => false,


//
//    // a cada quantos pixels se deve criar um cluster no mapa da busca
//    'maps.maxClusterRadius' => 40,
//
//    // simplificação do shapefile
//    'maps.geometryFieldQuery' => "ST_SimplifyPreserveTopology(geom, 0.001)",
//
//    // zoom padrão do mapa da busca
//
//    // zoom do mapa da single do agente quando este define a posição como aproximada
//    'maps.zoom.approximate' => 14,
//
//    // zoom do mapa da single do agente quando este define a posição como precisa
//    'maps.zoom.precise' => 16,
//
//    // zoom máximo do mapa da busca
    'maps.zoom.max' => 19,
//
//    // zom mínimo do mapa da busca
//    'maps.zoom.min' => 5,
//    // incluir no mapa as camadas do google?
//    'maps.includeGoogleLayers' => false,
//    // descomente para definir quais fivisões geográficas são utilizadas no tema
//    // devem ser as mesmas dos shapefiles
//    'app.geoDivisionsHierarchy' => [
//        'pais'          => 'País',
//        'regiao'        => 'Região',
//        'estado'        => 'Estado',
//        'mesorregiao'   => 'Mesorregião',
//        'microrregiao'  => 'Microrregião',
//        'municipio'     => 'Município',
//        'zona'          => 'Zona',
//        'subprefeitura' => 'Subprefeitura',
//        'distrito'      => 'Distrito'
//    ],
], $conf);
