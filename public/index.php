<?php
session_start();
/**
 *  author: houck 
 *  routeur Frontal  
 *  interprete l url et renvoie la reponse du site
 */

 use Houck\core\http\InterfaceHttp;
 use Houck\core\routeur\Routeur;

require '\wamp64\www\openlycook\vendor\autoload.php';

$http = new InterfaceHttp();
$info = $http->get_request_uri();
//echo $info;

if(!empty($_POST)){
    $page = new Routeur($info,'post',$_POST);
    $page->createPage();
}else{
    $page = new Routeur($info);
    $page->createPage();
}

// lecture de l url 
// tritement de l info 
// afficher le resultat
