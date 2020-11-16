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
  <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-1">
      <!-- zone vierge-->
    </div>
    <div class="col-lg-10">
  <form action='/enregistrer_recette/' method='post'>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="titre">Titre de la recette</label>
      <input type="text" class="form-control" id="titre">
    </div>
    <div class="form-group">
    <label for="difficult">difficulté</label>
    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="difficult">
    </div>
    <div class="form-group col-md-5">
      <label for="temps">Temps</label>
      <input type="text" class="form-control" id="temps">
    </div>
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <textarea class="form-control" id="description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress2">preparation</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="etape de preparation">
  </div>
  <div class="form-row">
    <div class="form-group col-md">
      <label for="ingredient">aliment generique</label>
      <select id="ingrediant" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
      </div>
    <div class="form-group col-md">
      <label for="inputState">ustensile necessaire</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>    
    </div>
  </div>
  <div class = form-row>
      <div class="form-group col-md-12">
        <label for="etape">Etape</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
      </div>     
  </div> 
  <div class = form-row>
      <div class="form-group ">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>     
  </div> 
  
</form>
</div>
    <div class="col col-lg-1">
      <!-- zone vierge-->
    </div>
  </div>
  </div>
</div>

  <!-- Footer -->
  {include file='footer.tpl'}
  <!-- Bootstrap core JavaScript -->
  {include file='script.tpl'}
</body>

</html>
