<?php
/**
 *  classe pour les requettes http
 *  permet la lecture et l interpretation de l url
 *  
 */
namespace houck\core\http;

class InterfaceHttp 
{
    private $statutCode;
    private $method;
    private $header;
    private $user_agent;
    private $content;
    private $proxy;
    private $request_fulluri;
    private $follow_location;
    private $protocol_version;
    private $time_out;
    private $ignore_errors;

    public function __construct (){
        $this->method=$_SERVER['method'];
    }

}
