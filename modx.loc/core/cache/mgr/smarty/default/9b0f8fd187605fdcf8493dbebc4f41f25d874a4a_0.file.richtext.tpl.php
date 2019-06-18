<?php
/* Smarty version 3.1.33, created on 2019-06-14 09:33:01
  from 'W:\domains\modx.loc\manager\templates\default\element\tv\renders\input\richtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d033f9d728c69_32783328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b0f8fd187605fdcf8493dbebc4f41f25d874a4a' => 
    array (
      0 => 'W:\\domains\\modx.loc\\manager\\templates\\default\\element\\tv\\renders\\input\\richtext.tpl',
      1 => 1560320848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d033f9d728c69_32783328 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
