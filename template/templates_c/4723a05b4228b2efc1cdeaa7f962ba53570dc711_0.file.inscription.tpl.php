<?php
/* Smarty version 3.1.36, created on 2020-11-17 11:37:32
  from 'C:\wamp64\www\openlycook\template\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb3b5fceae090_43211381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4723a05b4228b2efc1cdeaa7f962ba53570dc711' => 
    array (
      0 => 'C:\\wamp64\\www\\openlycook\\template\\inscription.tpl',
      1 => 1605613042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navigation.tpl' => 1,
    'file:header.tpl' => 1,
    'file:formulaireInscription.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:script.tpl' => 1,
  ),
),false)) {
function content_5fb3b5fceae090_43211381 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
  <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
  <!--ajouter les ligne du head supplementaire pour la page --> 
</head>

<body>
  <!-- Navigation -->
  <?php $_smarty_tpl->_subTemplateRender('file:navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- Header -->
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- Page Content -->
  <?php if (((isset($_smarty_tpl->tpl_vars['succes']->value)))) {?>
   <div class="alert alert-success" role="alert">
    Félicitation enregistrement reussit !!
   </div>
  <?php }?>
  <?php $_smarty_tpl->_subTemplateRender('file:formulaireInscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
