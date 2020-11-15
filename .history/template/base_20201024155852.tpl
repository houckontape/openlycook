{* Je suis un commentaire Smarty, je n'existe pas dans la sortie compilée *}
<html>
 <head>
  <title>openlycook {{$title}}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>
  <H1>{$titre}</H1>
{* un autre commentaire Smarty sur une seule ligne *}
<!-- Un commentaire Html qui sera envoyé au navigateur -->

{* ces multi-lignes sont des commentaires
qui ne sont pas envoyées au navigateur
*}

{*********************************************************
Un bloc de commentaires multilignes contenant les crédits
@ author:         bg@example.com
@ maintainer:     support@example.com
@ para:           var that sets block style
@ css:            the style output
**********************************************************}


</body>
</html>