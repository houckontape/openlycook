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
  <header  class="py-5 mb-5">
    <div class="container h-10">
      <div class="row h-10 align-items-center">
        <div class="col-lg-8">
          <img src="http://www.asset.openlycook.com/assets/img/b&r.png" class="img-fluid" alt="logo du site openlycook ecrit en bleu et rose les deux o forme un coeur avec cuillere et fourchette ">
            <p class="lead">{$slogan}</p>
        </div>        
      </div>
    </div>
  </header>
  <!-- Page Content -->
  <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Liste des ingredients</a>
    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Ustensiles</a>
    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Preparation</a>
    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Etape 1</a>
    <a class="list-group-item list-group-item-action" id="etape2" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Ajout etape 2</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <!--etape 1-->
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{$ingredient1|default:'ingredient 1'}</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">etape 2</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">etape 3</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">etape 4</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="etape2">etape 4</div>
    </div>
  </div>
</div>
  <!-- Footer -->
  {include file='footer.tpl'}
  <!-- Bootstrap core JavaScript -->
  {include file='script.tpl'}
</body>

</html>