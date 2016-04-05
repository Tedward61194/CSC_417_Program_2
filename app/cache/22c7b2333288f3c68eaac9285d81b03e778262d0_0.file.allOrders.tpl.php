<?php
/* Smarty version 3.1.29, created on 2016-03-31 01:57:06
  from "/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/allOrders.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc67d2f2afe9_93972652',
  'file_dependency' => 
  array (
    '22c7b2333288f3c68eaac9285d81b03e778262d0' => 
    array (
      0 => '/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/allOrders.tpl',
      1 => 1459382058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56fc67d2f2afe9_93972652 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "localstyle", array (
  0 => 'block_160858722256fc67d2f1b9a0_53820348',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_125776611156fc67d2f1e965_35938161',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'localstyle'}  file:allOrders.tpl */
function block_160858722256fc67d2f1b9a0_53820348($_smarty_tpl, $_blockParentStack) {
?>

<link href="css/table-display.css" rel="stylesheet" />
<?php
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:allOrders.tpl */
function block_125776611156fc67d2f1e965_35938161($_smarty_tpl, $_blockParentStack) {
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
