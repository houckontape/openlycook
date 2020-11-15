<?php
/**
 *  classe pour les requettes http
 *  permet la lecture et l interpretation de l url
 *  
 */
namespace houck\core\http;

class InterfaceHttp 
{
    private  $HTTP_HOST;
    private $HTTP_USER_AGENT;
    private $HTTP_ACCEPT;
    private $HTTP_ACCEPT_LANGUAGE;
    private $HTTP_ACCEPT_ENCODING;
    private $HTTP_DNT;
  'HTTP_CONNECTION' => string 'keep-alive' (length=10)
  'HTTP_UPGRADE_INSECURE_REQUESTS' => string '1' (length=1)
  'HTTP_CACHE_CONTROL' => string 'max-age=0' (length=9)
  'PATH' => string 'C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\PuTTY\;D:\Symfony\Symfony;C:\Program Files\Git\cmd;C:\composer;C:\Program Files\Docker\Docker\resources\bin;C:\ProgramData\DockerDesktop\version-bin;C:\Windows\system32\config\systemprofile\AppData\Local\Microsoft\WindowsApps' (length=371)
  'SystemRoot' => string 'C:\Windows' (length=10)
  'COMSPEC' => string 'C:\Windows\system32\cmd.exe' (length=27)
  'PATHEXT' => string '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC' (length=53)
  'WINDIR' => string 'C:\Windows' (length=10)
  'SERVER_SIGNATURE' => string '<address>Apache/2.4.41 (Win64) PHP/7.3.12 Server at localhost Port 80</address>
' (length=80)
  'SERVER_SOFTWARE' => string 'Apache/2.4.41 (Win64) PHP/7.3.12' (length=32)
  'SERVER_NAME' => string 'localhost' (length=9)
  'SERVER_ADDR' => string '::1' (length=3)
  'SERVER_PORT' => string '80' (length=2)
  'REMOTE_ADDR' => string '::1' (length=3)
  'DOCUMENT_ROOT' => string 'C:/wamp64/www' (length=13)
  'REQUEST_SCHEME' => string 'http' (length=4)
  'CONTEXT_PREFIX' => string '' (length=0)
  'CONTEXT_DOCUMENT_ROOT' => string 'C:/wamp64/www' (length=13)
  'SERVER_ADMIN' => string 'wampserver@wampserver.invalid' (length=29)
  'SCRIPT_FILENAME' => string 'C:/wamp64/www/openlycook/public/index.php' (length=41)
  'REMOTE_PORT' => string '63511' (length=5)
  'GATEWAY_INTERFACE' => string 'CGI/1.1' (length=7)
  'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8)
  'REQUEST_METHOD' => string 'GET' (length=3)
  'QUERY_STRING' => string '' (length=0)
  'REQUEST_URI' => string '/openlycook/public/' (length=19)
  'SCRIPT_NAME' => string '/openlycook/public/index.php' (length=28)
  'PHP_SELF' => string '/openlycook/public/index.php' (length=28)
  'REQUEST_TIME_FLOAT' => float 1603186904.395
  'REQUEST_TIME' => int 1603186904
    public function __construct (){
        foreach( $_SERVER as $key=>$valeur){
            $this->$key = $valeur;
        }
    }

}
