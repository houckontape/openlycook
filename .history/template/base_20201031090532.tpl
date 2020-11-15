{* Je suis un commentaire Smarty, je n'existe pas dans la sortie compilée *}
<html>
 <head>
  <title> {$title|default:"openlycook"}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{$titre|capitalize}</h1>
    <p class="lead">{$slogan}</p>
    <div class='article'>
      {include file='article.tpl'}
    </div>
  </div>
</div>

</body>
</html>