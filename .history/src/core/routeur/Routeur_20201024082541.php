<?php
/**
 * gere les info en focntion du routeur frontal
 * peut avoir le travail de filtre sur les info passer depuis les url
 * permet de generer la bonne classe pour afficher la bonne vue
 * permet d appeller les classes de securité si necessaire
 */
namespace Houck\core\Routeur;
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
                $page = new Page();
                break;
            default :
                echo 'pas de page';    
        }

    }
    
}
