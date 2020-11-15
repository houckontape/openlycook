<?php
namespace houck\model;
use PDO;
use PDOStatement;
/**
 * singleton de connection a la bdd
 *
 */
class Co 
{
   // instance PDO
    private $dbh = null;
    private $host = 'localhost';
    private $user ='root';
    private $pass = '';
	private $database='openlycook';
	// instance de Connect
	private static $instance = null;

	private function __construct()
	{   
		try{
			$this->dbh = new PDO("mysql:host=".$this->host."; dbname=".$this->database, $this->user, $this->pass);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOexception $e){
				echo('Erreur'.$e->getMessage());
				die();
		}
		
		

   }

   // crée et retourne l instance de connect.
   public static function getCo()
   {
	   
	   if(is_null(self::$instance))
	   {
		   self::$instance = new Co();
	   }

	   return self::$instance;
   }

  
    public function query($sql)
    {
		try{
			$retour = $this->dbh->prepare($sql);
			$data  = $retour->execute();
			$a = $retour->fetchAll();
			return $a;
		}catch(PDOexception $e){
			echo('Erreur'.$e->getMessage());
			die();
		}
	}

	public function queryOne($sql)
	{
		try{
			$retour = $this->dbh->prepare($sql);
			$data  = $retour->execute();
			$a = $retour->fetchAll();
			return $a;
		}catch(PDOexception $e){
			echo('Erreur'.$e->getMessage());
			die();
		}
		
	}
	public function reqInsert($sql)
	{
		try{
			$req = $this->dbh->prepare($sql);
			$req->execute();
		}catch(PDOexception $e){
			echo('Erreur'.$e->getMessage());
		}		
	}
	
}


