<?php
/* Smarty version 3.1.36, created on 2020-11-16 05:42:27
  from 'C:\wamp64\www\openlycook\template\navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb21143c5ea25_34179434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '780d8fb59824dace8eff64b0c1f80585a40a2167' => 
    array (
      0 => 'C:\\wamp64\\www\\openlycook\\template\\navigation.tpl',
      1 => 1605505345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb21143c5ea25_34179434 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <?php if (((isset($_smarty_tpl->tpl_vars['messageInfo']->value)))) {?>
            <div class="alert alert-warning" role="alert">
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messageInfo']->value)===null||$tmp==='' ? 'pas de message' : $tmp);?>

      </div> 
      <?php }?> 
  <!-- Button trigger modal -->  
    <div class="container">
      <a class="navbar-brand" href="#"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'titre par default' : $tmp);?>
</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="/articles/">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact/">Contact</a>
          </li>		 
          <?php if (((isset($_smarty_tpl->tpl_vars['name']->value)))) {?>
          <li class="nav-item">
            <a class="nav-link" href="/repas/">Organiser mes Repas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/recette/">Recette</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/enregistrer_recette/">Enregistrer une Recette</a>
          </li>		 		 
          <li class="nav-item">
            <a class="nav-link" href="/profil/">Profil</a>
          </li>		 
		<?php } else { ?>
		  <li class="nav-item">
				<a class="nav-link" href="/inscription/">Inscription</a>
		</li>
		
		<?php }?> 
        </ul>    
	<?php if (((isset($_smarty_tpl->tpl_vars['name']->value)))) {?>
		<div class="badge badge-primary text-wrap" style="width: 6rem;">
		Bienvennue <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

		</div>    
		<?php } else { ?>
		  <!-- Button trigger modal -->
		  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
				connection
		</button>
	<?php }?>
      </div>
    </div>
    
  </nav>

<!--contenur fenetre modal connection -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Connection</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">     
      <form  action="/" method ="post">
        <fieldset>
        <legend>Inscription</legend>
          <div>
            <label for="mail">email:</label>
            <input type="e-mail" id="mail" name="mail">
          </div>
            <div>
              <label for="pass">password:</label>
              <input type="password" id="pass" name="password">
            </div>
            <div class="button">
              <button type="submit">Je me connecte</button>
             </div>
            </fieldset>
           </form>
          </div>         
        </div>
      </div>
    </div>
  </div>

</div>
  <?php }
}
