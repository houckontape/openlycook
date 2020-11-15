<?php
/**
 * gere les info en focntion du routeur frontal
 * peut avoir le travail de filtre sur les info passer depuis les url
 * permet de generer la bonne classe pour afficher la bonne vue
 * permet d appeller les classes de securité si necessaire
 */
namespace Houck\core\Routeur;
use Houck\controller\Nopage;
use Houck\controller\Home;




class Routeur 
{
    private $url;

    public function __construct ($url)
    {
        $this->url = $url;
    }

    public function createPage(){
        switch($this->url){
            case '/openlycook/':
                $page = new Home();
                break;
            case '/openlycook/public/':
                $page = new Home();
                break;
            default :
                $page = new Nopage();    
        }

    }
    
}
