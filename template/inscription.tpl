<!DOCTYPE html>
<html lang="fr">

<head>
  {include file='head.tpl'} 
  <!--ajouter les ligne du head supplementaire pour la page --> 
</head>

<body>
  <!-- Navigation -->
  {include file='navigation.tpl'}
  <!-- Header -->
  {include file='header.tpl'}
  <!-- Page Content -->
  {if (isset($succes))}
   <div class="alert alert-success" role="alert">
    Félicitation enregistrement reussit !!
   </div>
  {/if}
  {include file='formulaireInscription.tpl'}
  <!-- Footer -->
  {include file='footer.tpl'}
  <!-- Bootstrap core JavaScript -->
  {include file='script.tpl'}
</body>

</html>
