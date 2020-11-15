<?php
/**
 *  routeur Frontal  
 *  interprete l url et renvoie la reponse du site
 */

 use Houck\core\http\InterfaceHttp;
 use Houck\routeur\Routeur;

require '\wamp64\www\openlycook\vendor\autoload.php';

$env = 'dev';//projet en cour de developepement

$http = new InterfaceHttp();
$info = $http->get_request_uri();
echo $info;
$page = new Home();

// lecture de l url 
// tritement de l info 
// afficher le resultat
