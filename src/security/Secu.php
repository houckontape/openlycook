<?php
namespace Houck\security;
/**
 * gestion des failles securité
 * @author david Esteve <david.esteve66@gmail.com>
 * @version 1.0
 */
class Secu
{
   private static $message;

  /**
   * filtre les données d'un tableau
   *
   * previent de la  faille XSS
   *
   * @param type var Description
   * @return return type
   */
  public static function XSS($value)
  {
    return htmlspecialchars($value);
  }
  /**
   *filtre pour valider une adresse mail
   *
   *
   * @param type var Description
   * @return return type
   */
  public static function filtreMail($mail)
  {
    if (filter_var($mail,FILTER_VALIDATE_EMAIL)){
        return $mail;
    }else{
        return null;
    }
  }
  /**
   * undocumented function summary
   *
   * Undocumented function long description
   *
   * @param type var Description
   * @return return type
   */
  public static function hash($password)
  {
    return hash('sha256',$password);
  }
  /**
   * generation aleatoire de chaine de caractere
   *
   *
   * @param type var Description
   * @return return type
   */
  public static function chaineAleatoire($longueur)
  {
    $aleatoir="";
    $caractere='0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN@_-()';
    for ($i= 0; $i < $longueur ; $i++) {
      $aleatoir=$aleatoir.$caractere[random_int(0, strlen($caractere))];
    }

    return $aleatoir;
  }

  /**
   * filtre de protection des fichiers upload
   *
   *  Les 8 règles basiques pour implémenter un système d'upload sécurisé
   *
   *  Renommez le fichier
   *  N'enregistrez pas vos fichiers à la racine de votre site
   *  Vérifiez la taille du fichier
   *  Ne vous fiez pas aux extensions
   *  Effectuez un scan anti-malware
   *  Gardez le contrôle des permissions (CHMOD)
   *  N’autorisez l'upload qu'aux utilisateurs inscrits et authentifiés
   *  Limitez le nombre de fichiers qu'un utilisateurs peux mettre en ligne
   *
   * @param type la variable $_FILE
   * @return return type
   */
  public static function secuFile()
  {
    $fileName = $_FILES['piece']['tmp_name'];
    $newName = "upload/".self::chaineAleatoire(8).".pdf";
    $size = $_FILES['piece']['size'];

    $info = pathinfo($_FILES['piece']['name'],PATHINFO_EXTENSION);
    //echo $info;

    if ($size<100000){//limite la taille
        if ($info === 'pdf'){//limite les extension chargeable
            move_uploaded_file($fileName,$newName);
            return $newName;
        }else{
            echo "le fichier n'est pas un fichier pdf";
        }
    }else{
        echo "le fichier est trop volumineux taille max 100000 octets";
    }
}

}


