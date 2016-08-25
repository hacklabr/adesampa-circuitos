<?php
return array(
    1 => array(
        'slug' => 'tag',
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent',
            //'MapasCulturais\Entities\Event',
            //'MapasCulturais\Entities\Project'
        )
    ),

    2 => array(
        'slug' => 'area',
        'required' => "Você deve informar ao menos um segmento",
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent'
        ),
        'restricted_terms' => array(
                       "Alarmes e CFTV", 
                       "Alimentos", 
                       "Armarinhos", 
                       "Artesanato", 
                       "Artigos Festa", 
                       "Artigos de Época", 
                       "Artigos para lojas", 
                       "Assistencia Técnica", 
                       "Audio e Video", 
                       "Aviamentos", 
                       "Bijuterias", 
                       "Brindes", 
                       "Brinquedos", 
                       "Cabos",
                       "Calçados", 
                       "Cama, mesa e banho", 
                       "Cartuchos", 
                       "Celulares", 
                       "Componentes", 
                       "Confecções", 
                       "Couro e Assessorios", 
                       "Câmeras Digitais", 
                       "Decoração", 
                       "Eletrônicos", 
                       "Elétrica", 
                       "Embalagens", 
                       "Enxoval", 
                       "Expositores, manequins", 
                       "Fantasia", 
                       "Ferramentas", 
                       "Games", 
                       "Iluminação", 
                       "Importados", 
                       "Informática", 
                       "Instrumentos musicais", 
                       "Jeans", 
                       "Linhas e Fios", 
                       "Madeiras", 
                       "Malas e Bolsas", 
                       "Maquinas e Assistencia", 
                       "Moda", 
                       "Moda Esportiva", 
                       "Moda Evangélica", 
                       "Moda Feminina", 
                       "Moda Festa", 
                       "Moda GG", 
                       "Moda Infantil", 
                       "Moda Jeans", 
                       "Moda Jovem", 
                       "Moda Masculina", 
                       "Moda Praia", 
                       "Moda Social Feminina", 
                       "Moda íntima", 
                       "Mídias Cds e Dvds", 
                       "Noivas", 
                       "Notebooks", 
                       "Papelaria", 
                       "Sacaria", 
                       "Segurança", 
                       "Serviços", 
                       "Som Automotivo", 
                       "Surfwear", 
                       "Tecido e Malharia", 
                       "Tecidos e Retalhos", 
                       "Telefonia"

                                    )
    ),

    3 => array(
        'slug' => 'linguagem',
        'required' => "Você deve informar ao menos uma linguagem",
        'entities' => array(
            'MapasCulturais\Entities\Event'
        ),

        'restricted_terms' => array(
        )
               ),

);