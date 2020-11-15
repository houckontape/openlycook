<?php
namespace Houck\core\view;

use Smarty;
/**
 * gere l affichage d 'une page 
 */
class Page
{
    private $template;
    private $compile;
    private $config;
    private $cache;

    public function __construct(){
        $smarty = new Smarty();
        $this->template = __DIR__.'/template';
        
    }
}
