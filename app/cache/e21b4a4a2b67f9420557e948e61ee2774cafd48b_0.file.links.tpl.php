<?php
/* Smarty version 3.1.29, created on 2016-04-04 19:30:30
  from "/home/teddy/NetBeansProjects/FlowerShop/templates/links.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5702f916c8ebb8_22537985',
  'file_dependency' => 
  array (
    'e21b4a4a2b67f9420557e948e61ee2774cafd48b' => 
    array (
      0 => '/home/teddy/NetBeansProjects/FlowerShop/templates/links.tpl',
      1 => 1459382140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5702f916c8ebb8_22537985 ($_smarty_tpl) {
?>
<li><a href=".">Home</a></li>
<li><a href="cart.php">My Cart</a></li>

<?php if ($_smarty_tpl->tpl_vars['session']->value->member && !$_smarty_tpl->tpl_vars['session']->value->member->is_admin) {?>
<li><a href="myOrders.php">My Orders</a></li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->member && $_smarty_tpl->tpl_vars['session']->value->member->is_admin) {?>
<li><a href="allOrders.php">All Orders</a></li>
<li><a href="addFlower.php">Add Flower</a></li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->member) {?>
<li><a href="logout.php">Logout</a></li>
<?php } else { ?>
<li><a href="login.php">Login</a></li>
<?php }
}
}
