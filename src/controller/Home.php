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

class Home 
{
    private $page;
    private $data;
    private $templateName;

    function __construct($data=null){

        $appli=new Config();
       $infoBase=[ 
                    'title'=>$appli->getName(),
                    'slogan'=>$appli->getSlogan(),
                    'description'=>$appli->getDescription(),
                    'messageInfo'=>$appli->getMessage()
        ];

        if(!isset($data['default'])){
            $user = new User($data);
            $identiteUser = $user->identification();
            if($identiteUser){
                $infoBase=array_merge($infoBase,$identiteUser);
                print_r($_SESSION);
            }
        }
         $this->data=$infoBase;   
         $this->templateName = 'base';
         $this->page = new Page();
         
    }

    function getPage(){
        $this->page->complexRender($this->templateName,$this->data);
    }
}
