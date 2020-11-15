<?php
namespace Houck\core\view;

use Smarty;
/**
 * gere l affichage d 'une page 
 */
class Page extends Smarty
{
    function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir('/web/www.example.com/guestbook/templates/');
        $this->setCompileDir('/web/www.example.com/guestbook/templates_c/');
        $this->setConfigDir('/web/www.example.com/guestbook/configs/');
        $this->setCacheDir('/web/www.example.com/guestbook/cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
   }
    
}
