<?php
/* Smarty version 3.1.29, created on 2016-03-31 01:55:40
  from "/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/links.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc677c984881_69839449',
  'file_dependency' => 
  array (
    'bc122df07e82d99a173b17c43c09a1feeb8321b1' => 
    array (
      0 => '/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/links.tpl',
      1 => 1459382140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fc677c984881_69839449 ($_smarty_tpl) {
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
