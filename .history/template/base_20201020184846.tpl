DOCTYPE
{* Je suis un commentaire Smarty, je n'existe pas dans la sortie compilée *}
<html>
 <head>
  <title>{$title}</title>
 </head>
 <body>

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

{* Inclusion du fichier d'en-tête contenant le logo principal *}
{include file='header.tpl'}

{* Note aux développeurs :  $includeFile est assigné au script foo.php  *}
<!-- Affichage du bloc principal -->
{include file=$includeFile}

{* Ce block <select> est redondant *}
{*
<select name="company">
 {html_options options=$vals selected=$selected_id}
</select>
*}

<!-- L'affichage de l'en-tête est désactivé -->
{* $affiliate|upper *}

{* Vous ne pouvez pas imbriquer des commentaires *}
{*
<select name="company">
  {* <option value="0">-- none -- </option> *}
  {html_options options=$vals selected=$selected_id}
</select>
*}

{* Balise cvs pour un template, ci-dessous, le 36 DOIT ÊTRE une devise américaine sinon,
il sera converti en cvs.. *}
{* &#36;Id: Exp &#36; *}
{* $Id: *}
</body>
</html>