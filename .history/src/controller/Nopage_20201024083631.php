<?php
/**
 * undocumented class
 */
namespace Houck\controller;
use Houck\core\view\Page;


class Nopage
{
    private $page;

    function __construct(){

         $this->page = new Page();
         $this->page->render(array('title'=>'page Introuvable'));   
    }
}
