<?php
/* Smarty version 3.1.29, created on 2016-04-04 19:30:38
  from "/home/teddy/NetBeansProjects/FlowerShop/templates/cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5702f91e69d870_88984665',
  'file_dependency' => 
  array (
    'bcda125c183b5cabee5e6dded5a02d306621a2d7' => 
    array (
      0 => '/home/teddy/NetBeansProjects/FlowerShop/templates/cart.tpl',
      1 => 1459382482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5702f91e69d870_88984665 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "localstyle", array (
  0 => 'block_21138140075702f91e6847e6_48513467',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_1820065355702f91e686bb0_41389856',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'localstyle'}  file:cart.tpl */
function block_21138140075702f91e6847e6_48513467($_smarty_tpl, $_blockParentStack) {
?>

<link href="css/table-display.css" rel="stylesheet" />
<style type="text/css">
</style>
<?php
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:cart.tpl */
function block_1820065355702f91e686bb0_41389856($_smarty_tpl, $_blockParentStack) {
?>

  
<h2>My Cart</h2>



<pre>
<?php echo print_r($_smarty_tpl->tpl_vars['cart_data']->value);?>
  
</pre>

<?php
}
/* {/block 'content'} */
}
