<!DOCTYPE html>
<html lang="fr">

<head>
  {include file='head.tpl'} 
  <!--ajouter les ligne du head supplementaire pour la page --> 
  <link href="..\..\css\profil.css" rel="stylesheet">
</head>

<body>
  <!-- Navigation -->
  {include file='navigation.tpl'}
  <!-- Header -->
  <header id="entete"  class="py-5 mb-6">
    <div class="container h-10">
      <div class="row h-10 align-items-center">
        <div class="col-lg-12 ">
          <h1>Mon Compte</h1>
          <p>Bienvennue {$name|default:'visiteur'}</p>           
        </div>        
      </div>
    </div>
  </header>
  <!-- Page Content -->
  
  <div class="row">
    <!--menu de la page mon compte -->
      <div id="menu" class="col-2  text-black justify-content-start">
        navigation
        <ul class="nav flex-column">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Menu</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Liste</a>
          </li>
        </ul>
      </div>
    <!--menu de la page mon compte -->  
    <!-- contenu de la page -->  
    <div id="contenuePage" class="container">
        <!-- bloc identité -->
        <div class="row">
          <div class="col">
            <div id="carteIdentite" class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{$name}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{$age|default:'age'}</h6>
                <p class="card-text">{$messageEncouragement|default:'message d\'encouragement'}</p>
                <p class="card-text">{$poids|default:'mon poids'}</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Launch demo modal
                </button>
              </div>
              
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
            </div>  
          </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{$objectif|default:'Mes Objectifs'}</h5>
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {$objectif1|default:'objectif 1'}
                      <span class="badge badge-primary badge-pill">{$valeurObjectif1|default:'valeur'}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {$objectif2|default:'objectif 2'}
                      <span class="badge badge-primary badge-pill">{$valeurObjectif2|default:'valeur'}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {$objectif3|default:'objectif 3'}
                      <span class="badge badge-primary badge-pill">{$valeurObjectif3|default:'valeur'}</span>
                    </li>
                  </ul>
                <a href="#" class="card-link">Modifier</a>
              </div>
            </div>  
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{$filtre|default:'Mes Filtres'}</h5>                
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {$filtre1|default:'filtre 1'}
                      <span class="badge badge-primary badge-pill">{$valeurFiltre1|default:'valeur'}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {$filtre2|default:'filtre 2'}
                      <span class="badge badge-primary badge-pill">{$valeurFiltre2|default:'valeur'}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {$filtre3|default:'filtre 3'}
                      <span class="badge badge-primary badge-pill">{$valeurFiltre3|default:'valeur'}</span>
                    </li>
                  </ul>
                <a href="#" class="card-link">Modifier</a>
              </div>
            </div>  
            </div>
          </div>
          <div class="container">
          <div class="row">
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>
  
</div>
</div>
    <!-- contenu de la page -->
    
  </div>
  
  <!-- Footer -->
  {include file='footer.tpl'}
  <!-- Bootstrap core JavaScript -->
  {include file='script.tpl'}
</body>

</html>
