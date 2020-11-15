<?php
namespace Houck\util;

use Houck\model\Co;
use Houck\security\Secu;

/**
 * undocumented class
 */

class Config{
    private $applicationName;
    private $slogan;
    private $description;
    private $messageInfo;

    function __construct(){
        $co=Co::getCo();
        $sql="SELECT * FROM `configurationappli`";
        $data = $co->query($sql);
        $this->applicationName=$data[0]['applicationName'];
        $this->slogan=$data[0]['slogan'];
        $this->description=$data[0]['description'];
        $this->messageInfo=$data[0]['messageInfo'];

    }

    function getName(){
       return $this->applicationName;
    }
    function getSlogan(){
        return $this->slogan;
    }
    function getDescription(){
        return $this->description;
    }

    function getMessage(){
        return $this->messageInfo;
    }

    
    

}