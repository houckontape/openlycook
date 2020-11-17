<?php
namespace Houck\util;

use Houck\model\Co;
use Houck\security\Secu;

/**
 * undocumented class
 */
class User 
{
    private $id;
    private $name;
    private $mail;
    private $password;
    

    function __construct($data=null)
    {
        if(isset($data['name'])){
            $this->name= Secu::XSS($data['name']);
            $this->mail=Secu::filtreMail($data['mail']);
            $this->password =Secu::hash($data['password']);//on cree la cle de hashage directement lors de la construc
        }else{
            $this->mail=Secu::filtreMail($data['mail']);
            $this->password =Secu::hash($data['password']);//on cree la cle de hashage directement lors de la construction de l objet
        }          
    }

    public function enregistrement(){
        $test = $this->mailExist();
        if ($test){
            $co =Co::getCo();
            $sql = "INSERT INTO `user` (`name`,`mail`,`password`) VALUES ('".$this->name."','".$this->mail." ','".$this->password."');";
            //echo $sql;
            $co->reqInsert($sql); 
            return true;           
        }else{
            echo "<div class='alert alert-danger' role='alert'>L adresse mail exist deja</div>"; 
            return false;   
        }
        
    }

    public function mailExist(){
        $co = Co::getCo();
        $sql = "SELECT * FROM `user` WHERE `mail` ='".$this->mail."';";
        $result = $co->query($sql);
        //print_r($result);
        if (empty($result)){
            return true;
        }else{
            return false;
        }

    }

    public function identification(){
        $co = Co::getCo();
        $sql = "SELECT * FROM `user` WHERE `mail` ='".$this->mail."';";
        //echo $sql;
        $resultat = $co->query($sql); 
        echo $this->password,PHP_EOL;       
        print_r($resultat[0]['password']);
        
        if ($this->password == $resultat[0]['password']){
            $this->name = $resultat[0]['name'];
            $this->id = $resultat[0]['id'];
            $_SESSION['name']=$this->name;
            $_SESSION['token'] = 'tokenalacon';
            return $resultat[0];
        }else{
            echo "<div class='alert alert-danger' role='alert'>identifiant incorrecte</div>";
            return  false;
        }
        
    }

    public function getName(){
        return $this->name;
    }

    
}
