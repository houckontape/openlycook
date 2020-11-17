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
use Houck\controller\EnregistrerRecette;

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
            case '/':
                //print_r($this->data);
                $page = new Home($this->data);
                $page->getPage();
                break;
            case '/public/':
                //print_r($this->data);
                $page = new Home($this->data);
                $page->getPage();
                break;
            case '/inscription/':
                if(isset($this->data['mail'])){
                    print_r($this->data);
                    $user= new User($this->data);
                    $succes = $user->enregistrement();
                    $infoPage=[
                        'success'=>$succes,
                    ];
                    $page = new Inscription($infoPage);
                    $page->getPage();
                }else{
                    $page = new Inscription();
                    $page->getPage(); 
                }
                break;
            case  '/profil/':
                $page = new Profil($_SESSION);
                $page->getPage(); 
                break; 
            case  '/recette/':
                $page = new Recette($_SESSION); 
                break; 
            case  '/enregistrer_recette/':
                $page = new EnregistrerRecette($_SESSION);
                $page->getPage(); 
                break;       
            default :
                $page = new Nopage();    
        }

    }
    
}
