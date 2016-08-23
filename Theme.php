<?php
namespace CircuitosDeCompras;
use MapasCulturais\Themes\BaseV1;
use MapasCulturais\App;

class Theme extends BaseV1\Theme{
    
    public static $subdomains = [
        'bras' => [
            'name' => 'Brás',
            'cor' => '',
            'zoom' => 14,
            'center' => [-23.54364842214825, -46.61720306761708],
            'segmentos' => [
                "Acessórios", 
                "Alimentação", 
                "Alimentos", 
                "Artigos para lojas", 
                "Aviamentos", 
                "Bijuterias", 
                "Cama, mesa e banho", 
                "Confecções", 
                "Couro e Assessorios", 
                "Eletronicos", 
                "Embalagens", 
                "Enxoval", 
                "Expositores, manequins", 
                "Feira da Madrugada", 
                "Madeiras", 
                "Malas e Bolsas", 
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
                "Moda Íntima", 
                "Noivas", 
                "Papelaria", 
                "Sacaria", 
                "Serviços", 
                "Surfwear", 
                "Tecidos e Retalhos" 
            ]
        ],
        'bomretiro' => [
            'name' => 'Bom Retiro',
            'cor' => '',
            'zoom' => 15,
            'center' => [-23.531392575917064, -46.64086548313208],
            'segmentos' => [
                "Aviamentos", 
                "Bijuterias", 
                "Calçados", 
                "Confecções", 
                "Embalagens", 
                "Jeans", 
                "Linhas e Fios", 
                "Malas e Bolsas", 
                "Maquinas e Assistencia", 
                "Moda Feminina", 
                "Moda Festa", 
                "Moda GG", 
                "Moda Infantil", 
                "Moda Masculina", 
                "Moda Praia", 
                "Moda Social Feminina", 
                "Tecido e Malharia" 
            ]
        ],
        'santaifigenia' => [
            'name' => 'Santa Ifigênia',
            'cor' => '',
            'zoom' => 16,
            'center' => [-23.540374323957664, -46.63952036578849],
            'segmentos' => [
                "Alarmes e CFTV", 
                "Assistencia Técnica", 
                "Audio e Video", 
                "Cabos", 
                "Cartuchos", 
                "Celulares", 
                "Componentes", 
                "Câmeras Digitais", 
                "Eletrônicos", 
                "Elétrica", 
                "Ferramentas", 
                "Games", 
                "Iluminação", 
                "Inform\u00e1tica", 
                "Instrumentos musicais", 
                "Mídias Cds e Dvds", 
                "Notebooks", 
                "Segurança", 
                "Som Automotivo", 
                "Telefonia"
            ]
        ],
        '25demarco' => [
            'name' => '25 de Março',
            'cor' => '',
            'zoom' => 16,
            'center' => [-23.542261577576905, -46.63207322359085],
            'segmentos' => [
                "Alimentos", 
                "Armarinhos", 
                "Artesanato", 
                "Artigos Festa", 
                "Artigos de Época", 
                "Aviamentos", 
                "Bijuterias", 
                "Brindes", 
                "Brinquedos", 
                "Cama, mesa e banho", 
                "Decoração", 
                "Embalagens", 
                "Fantasia", 
                "Importados", 
                "Malas e Bolsas", 
                "Moda"
            ]
        ],
        'mercadao' => [
            'name' => 'Mercado Municipal de SP',
            'cor' => '',
            'zoom' => 19,
            'center' => [-23.541737818641426, -46.629491930070806],
            'segmentos' => [
                "Alimentação", 
                "Avicola", 
                "Açougue", 
                "Empórios", 
                "Hortifruti", 
                "Laticinios", 
                "Mercearia", 
                "Outros", 
                "Peixaria"
            ]
        ],
    ];

    protected static function _getTexts(){
        $app = App::i();
        $self = $app->view;
        //$url_search_agents = $self->searchAgentsUrl;
        $url_search_spaces = $self->searchSpacesUrl;
        //$url_search_events = $self->searchEventsUrl;
        //$url_search_projects = $self->searchProjectsUrl;

        $subdomain = self::getSubdomain();
        if ($subdomain)
            $name = self::$subdomains[self::getSubdomain()]['name'];
        else
            $name = '';
        return [
                'entities: Spaces' => 'Lojas',
                'site: name' => $name,

                'home: abbreviation' => "DL",
                'home: colabore' => "Colabore com o Desenvolvimento Local",
                'home: welcome' => "O Mapas do Desenvolvimento Local de São Paulo plataforma livre, gratuita e colaborativa de mapeamento dos pequenos empreendimentos do território de São Paulo.",
                'home: events' => "Você pode pesquisar eventosnos campos de busca combinada. Como usuário cadastrado, você pode incluir seus eventos na plataforma e divulgá-los gratuitamente.",
                'home: agents' => "Você pode colaborar na gestãoo desenvolvimento local com suas próprias informações, preenchendo seu perfil de agente de desenvolvimento local. Neste espaço, estão registradoagentes da Asampa, liderançs locais e empreendedores; uma rede de atores envolvidos na cena econômica da região. Você pode cadastrar um ou mais agentes (grupos, coletivos, empresas, etc.), além de associar ao seu perfil eventos e espaço com divulgação gratuita.",
                'home: spaces' => "Procure por espaços incluídos na plataforma, acessando os campos de busca combinada que ajudam na precisão de sua pesquisa. Cadastre também os espaços onde desenvolve suas atividades.",
            
            
                'entities: Spaces of the agent'=> 'Lojas do agente',
                'entities: Space Description'=> 'Descrição da Loja',
                
                'entities: My Spaces'=> 'Minhas Lojas',
                'entities: My spaces'=> 'Minhas lojas',

                'entities: no registered spaces'=> 'nenhuma loja cadastrada',
                'entities: no spaces'=> 'nenhuma loja',

                'entities: Space' => 'Loja',
                'entities: Spaces' => 'Lojas',
                'entities: space' => 'loja',
                'entities: spaces' => 'lojas',
                'entities: parent space' => 'loja pai',
                'entities: a space' => 'uma loja',
                'entities: the space' => 'a loja',
                'entities: of the space' => 'da loja',
                'entities: In this space' => 'Nesta loja',
                'entities: in this space' => 'nesta loja',
                'entities: registered spaces' => 'lojas cadastradas',
                'entities: new space' => 'nova loja',

                'entities: space found' => 'loja encontrada',
                'entities: spaces found' => 'lojas encontradas',

        ];
    }

    static function getThemeFolder() {
        return __DIR__;
    }
    
    public function __construct(\MapasCulturais\AssetManager $asset_manager) {
        $subdomain = $this->getSubdomain();
        
        parent::__construct($asset_manager);
        if ($subdomain) {
            $assets_dir = __DIR__ . "/assets-subdomains/{$subdomain}";

            if (is_dir($assets_dir)) {
                $this->addPath($assets_dir);
            }
        }
    }

    function _init() {
        parent::_init();
        $app = App::i();
        
        $subdomain = $this->getSubdomain();
        
        if ($subdomain) {
            // quando tenta entrar num subdominio nao existente joga para um 404
            $app->hook('slim.before.dispatch', function() use($app, $subdomain){
                if(!isset(self::$subdomains[$subdomain])){
                    $app->pass();
                }
            });
            
            // redireciona para a buscase estiver acessando a single
            $url = $this->getSearchSpacesUrl();
            $app->hook('GET(site.index):before', function() use ($app, $url){
                $app->redirect($url);
            });
            
            // filtra a busca pela regiao do subdomínio
            $app->hook('API.find(space).params', function(&$params) use($subdomain){
                $params['regiao'] = 'EQ(' . self::$subdomains[$subdomain]['name'] . ')';
                $params['type'] = 'EQ(' . SPACE_TYPE_LOJA . ')';
            });
            
            // define a regiao para novos espaços
            $app->hook('entity(Space).insert:before', function() use ($subdomain) {
                $cfg = self::$subdomains[$subdomain];
                $this->regiao = $cfg['name'];
            });
            
            // define o tipo Loja
            $app->hook('entity(Space).new', function(){
                $this->type = SPACE_TYPE_LOJA; // id do tipo Loja
            });
        }
        
        $app->hook('view.render(<<*>>):before', function() use($app) {
            $this->_publishAssets();
        });
        
       
        // remove as partes não utilizadas do cadastro de espaço
        $disable_parts = [
            'singles/space-children',
            'singles/space-public',
            'singles/type',
            'entity-parent'
        ];
        
        foreach($disable_parts as $part){
            $app->hook("view.partial({$part}).params", function(&$params, &$template_name){
                $template_name = '_empty';
            });
        }
        
        // adiciona o campo CNPJ
        $app->hook('template(space.<<*>>.header-content):end', function(){
            $this->part('cnpj-field', ['entity' => $this->controller->requestedEntity]);
        });
    }

    protected function _publishAssets() {
        $this->jsObject['assets']['logo-instituicao'] = $this->asset('img/logo-instituicao.png', false);
    }

    public function register() {
        parent::register();
        $app = App::i();
        $metadata = [
            'MapasCulturais\Entities\Space' => [
                'regiao' => [
                    'label' => 'Região',
                    'type' => 'select',
                    'options' => [ 
                        'Brás',
                        'Bom Retiro',
                        'Santa Ifigênia',
                        '25 de Março',
                        'Mercado Municipal de SP'
                    ]
                ],
                
                'cnpj' => [
                    'label' => 'CNPJ',
                    'validations' => [
                        'unique' => 'Este CNPJ já está cadastrado',
                        'required' => 'O CNPJ é obrigatório',
                        'v::cnpj()' => 'O CNPJ não foi preenchido corretamente'
                    ]
                ]
            ]
        ];

        foreach ($metadata as $entity_class => $metas) {
            foreach ($metas as $key => $cfg) {
                $def = new \MapasCulturais\Definitions\Metadata($key, $cfg);
                $app->registerMetadata($def, $entity_class);
            }
        }
        
        $subdomain = self::getSubdomain();
        
        $app->hook('app.register', function(&$registry) use($subdomain){
            if(isset($registry['taxonomies']['by-slug']['area']) && isset(self::$subdomains[$subdomain]['segmentos'])){
                $registry['taxonomies']['by-slug']['area']->restrictedTerms = self::$subdomains[$subdomain]['segmentos'];
            }
            
            return;
        });
    
    }

    public function subdomain($subdomain){
        $domain = $_SERVER['HTTP_HOST'];
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        echo $protocol . $subdomain . '.' . $domain;
    }
    
    public static function getSubdomain(){
        if(preg_match('#([^\.]*)\.guiadecompras\.#', $_SERVER['HTTP_HOST'], $matches)){
            return $matches[1];
        } else {
            return null;
        }
        
    }
}
