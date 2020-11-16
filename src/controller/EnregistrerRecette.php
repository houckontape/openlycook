<?php
/**
 * undocumented class
 * faite le lien entre les info et l affichage
 *  assure le passage des info au templates
 */
namespace Houck\controller;

use Houck\core\view\Page;
use Houck\util\User;
use Houck\util\Config;

class EnregistrerRecette
{
    private $page;
    private $data;
    private $templateName;

    function __construct($data=null){
        print_r($data);
        $appli=new Config();
        $infoBase=[ 
                    'title'=>$appli->getName(),
                    'slogan'=>$appli->getSlogan(),
                    'description'=>$appli->getDescription(),
                    'messageInfo'=>$appli->getMessage()
        ];
        $user = new User($data);
        $infoUser = [
            'name'=>$user->getName(),

        ];
        
        $this->data=array_merge($infoBase,$infoUser);   
        $this->templateName = 'enregistrerRecette';
        $this->page = new Page();
         
    }


    function getPage(){
        $this->page->complexRender($this->templateName,$this->data);
    }
}
