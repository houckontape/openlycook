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
use Houck\controller\Inscription;
use Houck\controller\Profil;
use Houck\util\User;
use Houck\controller\Recette;

class Routeur 
{
    private $url;
    private $method;
    private $data;

    public function __construct ($url,$method=null,$data=null)
    {
        $this->url = $url;
        $this->method=$method;
        if(isset($data)){
            $this->data= $data;
        }else{
            $this->data = array('default'=>'visiteur');
        }
        

    }

    public function createPage(){
        
        switch($this->url){
            case '/openlycook/':
                //print_r($this->data);
                $page = new Home($this->data);
                $page->getPage();
                break;
            case '/openlycook/public/':
                //print_r($this->data);
                $page = new Home($this->data);
                $page->getPage();
                break;
            case '/openlycook/inscription/':
                if(!isset($_SESSION['name'])){
                    $user= new User($this->data);
                    $user->enregistrement();
                }
                $page = new Inscription();
                $page->getPage();
                
                break;
            case  '/openlycook/profil/':
                $page = new Profil($_SESSION);
                $page->getPage(); 
                break; 
            case  '/openlycook/recette/':
                $page = new Recette($_SESSION); 
                break;       
            default :
                $page = new Nopage();    
        }

    }
    
}
