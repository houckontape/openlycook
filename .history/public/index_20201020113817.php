<?php
/**
 *  routeur Frontal  
 *  interprete l url et renvoie la reponse du site
 */

 use Houck\core\http\InterfaceHttp;

require '\wamp64\www\openlycook\vendor\autoload.php';

$env = 'dev';//projet en cour de developepement

$Http = new InterfaceHttp();

print_r($Http);
// lecture de l url 
// tritement de l info 
// afficher le resultat
