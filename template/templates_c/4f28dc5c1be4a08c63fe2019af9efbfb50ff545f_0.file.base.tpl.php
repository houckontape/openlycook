<?php
/* Smarty version 3.1.36, created on 2020-11-14 20:37:12
  from 'C:\wamp64\www\openlycook\template\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb03ff817a326_63684937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f28dc5c1be4a08c63fe2019af9efbfb50ff545f' => 
    array (
      0 => 'C:\\wamp64\\www\\openlycook\\template\\base.tpl',
      1 => 1605350280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navigation.tpl' => 1,
    'file:header.tpl' => 1,
    'file:home.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:script.tpl' => 1,
  ),
),false)) {
function content_5fb03ff817a326_63684937 (Smarty_Internal_Template $_smarty_tpl) {
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
  <?php $_smarty_tpl->_subTemplateRender('file:home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
