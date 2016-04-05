<?php
/* Smarty version 3.1.29, created on 2016-03-28 22:36:12
  from "/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/help.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f995bc33d011_95122884',
  'file_dependency' => 
  array (
    '698afbe5edd8e3ed8fe8977ba21237719364a78c' => 
    array (
      0 => '/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/help.tpl',
      1 => 1459197349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56f995bc33d011_95122884 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_33985370056f995bc3369e4_20477439',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:help.tpl */
function block_33985370056f995bc3369e4_20477439($_smarty_tpl, $_blockParentStack) {
?>

<h2>Help</h2>

DBMS version: <?php echo $_smarty_tpl->tpl_vars['which']->value;?>
 

<?php
}
/* {/block 'content'} */
}
