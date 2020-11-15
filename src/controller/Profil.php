<?php
/**
 * 
 * faite le lien entre les info et l affichage
 *  assure le passage des info au templates
 */
namespace Houck\controller;


use Houck\core\view\Page;
use Houck\util\User;
use Houck\util\Config;

class Profil 
{
    private $page;
    private $data;

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
        $this->templateName = 'profil';
        $this->page = new Page();
         
    }

    public function  getPage(){
        $this->page->complexRender($this->templateName,$this->data);
    }


}
