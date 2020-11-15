<?php
/**
 * undocumented class
 * faite le lien entre les info et l affichage
 *  assure le passage des info au templates
 */
namespace Houck\controller;

use Houck\core\view\Page;

class Home 
{
    private $page;

    function __construct(){

         $this->page = new Page();
         $this->page->render(array('title'=>'coucou'));   
    }
}
