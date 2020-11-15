{* Je suis un commentaire Smarty, je n'existe pas dans la sortie compilée *}
<html lang='fr'>
 <head>
 {include file='head.tpl'}
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