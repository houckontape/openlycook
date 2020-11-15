<?php
/* Smarty version 3.1.36, created on 2020-11-14 21:04:07
  from 'C:\wamp64\www\openlycook\template\formulaireInscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb04647c02e79_14870355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f39de4d57c1df33ade04200d5526c43b1f24a67f' => 
    array (
      0 => 'C:\\wamp64\\www\\openlycook\\template\\formulaireInscription.tpl',
      1 => 1604983114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb04647c02e79_14870355 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!-- Page Content -->
<div class="row" id="formInscription">
  <div class="col-2"></div>
    <div class="col-8">
      <form  method ="post">
        <fieldset>
        <legend>Inscription</legend>
          <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name">
          </div>
          <div>
            <label for="mail">email:</label>
            <input type="e-mail" id="mail" name="mail">
          </div>
          <div>
            <label for="pass">password:</label>
            <input type="password" id="pass" name="password">
          </div>
          <div class="button">
             <button type="submit">Je m'inscript</button>
          </div>
        </fieldset>
      </form>
    </div>
    
  <div class="col-2"></div>
</div>
 
  
  <?php }
}
