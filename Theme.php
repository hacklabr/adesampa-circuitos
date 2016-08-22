<?php
namespace CircuitosDeCompras;
use MapasCulturais\Themes\BaseV1;
use MapasCulturais\App;

class Theme extends BaseV1\Theme{

    protected static function _getTexts(){
        $app = App::i();
        $self = $app->view;
        //$url_search_agents = $self->searchAgentsUrl;
        $url_search_spaces = $self->searchSpacesUrl;
        //$url_search_events = $self->searchEventsUrl;
        //$url_search_projects = $self->searchProjectsUrl;

        return [
                'entities: Spaces' => 'Lojas',
//            'site: name' => App::i()->config['app.siteName'],
//            'site: description' => App::i()->config['app.siteDescription'],
//            'site: in the region' => 'na região',
//            'site: of the region' => 'da região',
//            'site: owner' => 'Secretaria',
//            'site: by the site owner' => 'pela Secretaria',
//
//            'home: title' => "Bem-vind@!",
                'home: abbreviation' => "DL",
                'home: colabore' => "Colabore com o Desenvolvimento Local",
                'home: welcome' => "O Mapas do Desenvolvimento Local de São Paulo plataforma livre, gratuita e colaborativa de mapeamento dos pequenos empreendimentos do território de São Paulo.",
                'home: events' => "Você pode pesquisar eventosnos campos de busca combinada. Como usuário cadastrado, você pode incluir seus eventos na plataforma e divulgá-los gratuitamente.",
                'home: agents' => "Você pode colaborar na gestãoo desenvolvimento local com suas próprias informações, preenchendo seu perfil de agente de desenvolvimento local. Neste espaço, estão registradoagentes da Asampa, liderançs locais e empreendedores; uma rede de atores envolvidos na cena econômica da região. Você pode cadastrar um ou mais agentes (grupos, coletivos, empresas, etc.), além de associar ao seu perfil eventos e espaço com divulgação gratuita.",
                'home: spaces' => "Procure por espaços incluídos na plataforma, acessando os campos de busca combinada que ajudam na precisão de sua pesquisa. Cadastre também os espaços onde desenvolve suas atividades.",
//            'home: projects' => "Reúne projetos culturais ou agrupa eventos de todos os tipos. Neste espaço, você encontra leis de fomento, mostras, convocatórias e editais criados, além de diversas iniciativas cadastradas pelos usuários da plataforma. Cadastre-se e divulgue seus projetos.",
//            'home: home_devs' => 'Existem algumas maneiras de desenvolvedores interagirem com o Mapas Culturais. A primeira é através da nossa <a href="https://github.com/hacklabr/mapasculturais/blob/master/doc/api.md" target="_blank">API</a>. Com ela você pode acessar os dados públicos no nosso banco de dados e utilizá-los para desenvolver aplicações externas. Além disso, o Mapas Culturais é construído a partir do sofware livre <a href="http://institutotim.org.br/project/mapas-culturais/" target="_blank">Mapas Culturais</a>, criado em parceria com o <a href="http://institutotim.org.br" target="_blank">Instituto TIM</a>, e você pode contribuir para o seu desenvolvimento através do <a href="https://github.com/hacklabr/mapasculturais/" target="_blank">GitHub</a>.',
//
//            'search: verified results' => 'Resultados Verificados',
//            'search: verified' => "Verificados"
        ];
    }

    static function getThemeFolder() {
        return __DIR__;
    }

    function _init() {
        parent::_init();
        $app = App::i();
        $app->hook('view.render(<<*>>):before', function() use($app) {
            $this->_publishAssets();
        });
        
        if($this->getSubdomain()){
            $url = $this->getSearchSpacesUrl();
            $app->hook('GET(site.index):before', function() use ($app, $url){
                $app->redirect($url);
            });
            
            
        }
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
                                                                          'options' => [ '25 de Março',
                                                                                         'Brás',
                                                                                         'Bom Retiro',
                                                                                         'Santa Ifigênia',
                                                                                         ]
                                                                       ],
                                                          ]
                      ];

        foreach($metadata as $entity_class => $metas){
            foreach($metas as $key => $cfg){
                $def = new \MapasCulturais\Definitions\Metadata($key, $cfg);
                $app->registerMetadata($def, $entity_class);
            }
        }
    }
    
    
    public function subdomain($subdomain){
        $domain = $_SERVER['HTTP_HOST'];
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        echo $protocol . $subdomain . '.' . $domain;
    }
    
    public function getSubdomain(){
        if(preg_match('#([^\.]*)\.guiadecompras\.#', $_SERVER['HTTP_HOST'], $matches)){
            return $matches[1];
        } else {
            return null;
        }
        
    }
}
