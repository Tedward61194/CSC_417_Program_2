<?php
/* Smarty version 3.1.29, created on 2016-04-04 19:30:47
  from "/home/teddy/NetBeansProjects/FlowerShop/templates/allOrders.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5702f9273fa127_08994582',
  'file_dependency' => 
  array (
    '22201c069cfd838bcdb26e251b7e74fe6390779c' => 
    array (
      0 => '/home/teddy/NetBeansProjects/FlowerShop/templates/allOrders.tpl',
      1 => 1459382058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5702f9273fa127_08994582 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "localstyle", array (
  0 => 'block_15714419825702f9273e89a7_23699243',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_3629513255702f9273ea894_48264796',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'localstyle'}  file:allOrders.tpl */
function block_15714419825702f9273e89a7_23699243($_smarty_tpl, $_blockParentStack) {
?>

<link href="css/table-display.css" rel="stylesheet" />
<?php
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:allOrders.tpl */
function block_3629513255702f9273ea894_48264796($_smarty_tpl, $_blockParentStack) {
?>

<h2>All Orders</h2>
  <form action="allOrders.php" method="post">
    <table>
      <tr>
        <th>username:</th><td><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</td>
      </tr>
      <tr>
        <th>email:</th>
        <td>
          <input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        </td>
      </tr>
      <tr>
        <td></td><td><button type="submit" name="doit">Submit</button></td>
      </tr>
    </table>
    <h3><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>
  </form>
<?php
}
/* {/block 'content'} */
}
