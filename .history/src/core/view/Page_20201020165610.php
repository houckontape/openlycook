<?php
namespace Houck\core\view;

use Smarty;
/**
 * gere l affichage d 'une page 
 */
class Page extends Smarty
{
    parent:: __construct();

    public function render(){

        $this->Smarty();
        $this->template_dir = '/src/templates/';
        $this->compile_dir = '/src/templates_c/';
        $this->config_dir = '/src/configs/';
        $this->cache_dir = '/src/cache/';
   
        $this->caching = true;
        $this->assign('app_name', 'Guest Book');
    }
    
}
