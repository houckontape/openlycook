<?php
/**
 * undocumented class
 */
class Nopage
{
    private $page;

    function __construct(){

         $this->page = new Page();
         $this->page->render(array('title'=>'page Introuvable'));   
    }
}