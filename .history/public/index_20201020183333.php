<?php
/**
 *  routeur Frontal  
 *  interprete l url et renvoie la reponse du site
 */

 use Houck\core\http\InterfaceHttp;
 use Houck\core\controller\Home;

require '\wamp64\www\openlycook\vendor\autoload.php';

$env = 'dev';//projet en cour de developepement

$http = new InterfaceHttp();
echo $http->get_request_uri();
$page = new Home();

// lecture de l url 
// tritement de l info 
// afficher le resultat
