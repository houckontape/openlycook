<?php
namespace Houck\core\view;

use Smarty;
/**
 * gere l affichage d 'une page 
 * on initialise sous forme de singleton pour eviter de creer plusieur instance 
 */
class Page extends Smarty
{

    function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir('../template');
        //$this->setCompileDir('../template/templates_c');
        //$this->setConfigDir('/openlycook/configs/');
        //$this->setCacheDir('/openlycook/cache/');

        //$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        
   }

   public function render($tableau){
       foreach ($tableau as $key => $value) {
           $this->assign($key,$value);
           $this->display('base.tpl');
       }
   }
    
}
