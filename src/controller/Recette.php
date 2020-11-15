<?php
/**
 * 
 * faite le lien entre les info et l affichage
 *  assure le passage des info au templates
 */
namespace Houck\controller;

use Houck\core\view\Page;
use Houck\util\User;

class Recette 
{
    private $page;
    private $data;

   function __construct($data=null){
        
        $infoBase=array('title'=>'openlycook',
                        'slogan'=>'le site qui vous simplifie la cuisine bientot disponible'        
                        );

        if(isset($_SESSION['name'])){
            $infoBase=array_merge($infoBase,$_SESSION);
                print_r($_SESSION);
        }else{
            header("location:/openlycook/");
        }
        $this->page = new Page();
        $this->page->complexRender('recette',$infoBase); 

    }


}
