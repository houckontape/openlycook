<?php
/**
 * undocumented class
 * faite le lien entre les info et l affichage
 *  assure le passage des info au templates
 */
namespace Houck\controller;

use Houck\core\view\Page;
use Houck\util\Config;

class Inscription 
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

         $this->data=$infoBase;   
         $this->templateName = 'inscription';
         $this->page = new Page();
         
    }

    function getPage(){
        $this->page->complexRender($this->templateName,$this->data);
    }

}
