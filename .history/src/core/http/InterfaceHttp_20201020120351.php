<?php
/**
 *  classe pour les requettes http
 *  permet la lecture et l interpretation de l url
 *  
 */
namespace houck\core\http;

class InterfaceHttp 
{
    private $HTTP_HOST;
    private $HTTP_USER_AGENT;
    private $HTTP_ACCEPT;
    private $HTTP_ACCEPT_LANGUAGE;
    private $HTTP_ACCEPT_ENCODING;
    private $HTTP_DNT;
    private $connection_http;
    private $HTTP_UPGRADE_INSECURE_REQUESTS; 
    private $HTTP_CACHE_CONTROL; 
    private $PATH; 
    private $SystemRoot; 
    private $COMSPEC; 
    private $PATHEXT; 
    private $WINDIR; 
    private $SERVER_SIGNATURE; 
    private $SERVER_SOFTWARE; 
    private $SERVER_NAME; 
    private $SERVER_ADDR; 
    private $SERVER_PORT; 
    private $REMOTE_ADDR; 
    private $DOCUMENT_ROOT; 
    private $REQUEST_SCHEME; 
    private $CONTEXT_PREFIX; 
    private $CONTEXT_DOCUMENT_ROOT;
    private $SERVER_ADMIN; 
    private $SCRIPT_FILENAME;
    private $REMOTE_PORT; 
    private $GATEWAY_INTERFACE; 
    private $SERVER_PROTOCOL; 
    private $REQUEST_METHOD; 
    private $QUERY_STRING; 
    private $REQUEST_URI; 
    private $SCRIPT_NAME; 
    private $PHP_SELF;
    private $REQUEST_TIME_FLOAT; 
    private $REQUEST_TIME;


    public function __construct (){
        foreach( $_SERVER as $key=>$valeur){
            $this->$key = $valeur;
        }
    }
    

}
