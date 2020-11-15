<?php
/**
 *  classe pour les requettes http
 *  permet la lecture et l interpretation de l url
 *  
 */
namespace houck\core\http;

class InterfaceHttp 
{
    
    public function __construct (){
        foreach( $_SERVER as $key=>$valeur){
            $this->$key = $valeur;
        }
    }

}
