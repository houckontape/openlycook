<?php
/* Smarty version 3.1.36, created on 2020-11-14 21:23:56
  from 'C:\wamp64\www\openlycook\template\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb04aec4b2891_66410534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04bef9167b51b5155094c1708e34f1e2d93641fc' => 
    array (
      0 => 'C:\\wamp64\\www\\openlycook\\template\\profil.tpl',
      1 => 1605349573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navigation.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:script.tpl' => 1,
  ),
),false)) {
function content_5fb04aec4b2891_66410534 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
  <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
  <!--ajouter les ligne du head supplementaire pour la page --> 
  <link href="..\..\css\profil.css" rel="stylesheet">
</head>

<body>
  <!-- Navigation -->
  <?php $_smarty_tpl->_subTemplateRender('file:navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- Header -->
  <header id="entete"  class="py-5 mb-6">
    <div class="container h-10">
      <div class="row h-10 align-items-center">
        <div class="col-lg-12 ">
          <h1>Mon Compte</h1>
          <p>Bienvennue <?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? 'visiteur' : $tmp);?>
</p>           
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
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['age']->value)===null||$tmp==='' ? 'age' : $tmp);?>
</h6>
                <p class="card-text"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['messageEncouragement']->value)===null||$tmp==='' ? 'message d\'encouragement' : $tmp);?>
</p>
                <p class="card-text"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['poids']->value)===null||$tmp==='' ? 'mon poids' : $tmp);?>
</p>
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
                <h5 class="card-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['objectif']->value)===null||$tmp==='' ? 'Mes Objectifs' : $tmp);?>
</h5>
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['objectif1']->value)===null||$tmp==='' ? 'objectif 1' : $tmp);?>

                      <span class="badge badge-primary badge-pill"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['valeurObjectif1']->value)===null||$tmp==='' ? 'valeur' : $tmp);?>
</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['objectif2']->value)===null||$tmp==='' ? 'objectif 2' : $tmp);?>

                      <span class="badge badge-primary badge-pill"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['valeurObjectif2']->value)===null||$tmp==='' ? 'valeur' : $tmp);?>
</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['objectif3']->value)===null||$tmp==='' ? 'objectif 3' : $tmp);?>

                      <span class="badge badge-primary badge-pill"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['valeurObjectif3']->value)===null||$tmp==='' ? 'valeur' : $tmp);?>
</span>
                    </li>
                  </ul>
                <a href="#" class="card-link">Modifier</a>
              </div>
            </div>  
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['filtre']->value)===null||$tmp==='' ? 'Mes Filtres' : $tmp);?>
</h5>                
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['filtre1']->value)===null||$tmp==='' ? 'filtre 1' : $tmp);?>

                      <span class="badge badge-primary badge-pill"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['valeurFiltre1']->value)===null||$tmp==='' ? 'valeur' : $tmp);?>
</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['filtre2']->value)===null||$tmp==='' ? 'filtre 2' : $tmp);?>

                      <span class="badge badge-primary badge-pill"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['valeurFiltre2']->value)===null||$tmp==='' ? 'valeur' : $tmp);?>
</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['filtre3']->value)===null||$tmp==='' ? 'filtre 3' : $tmp);?>

                      <span class="badge badge-primary badge-pill"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['valeurFiltre3']->value)===null||$tmp==='' ? 'valeur' : $tmp);?>
</span>
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
  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- Bootstrap core JavaScript -->
  <?php $_smarty_tpl->_subTemplateRender('file:script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html>
<?php }
}
