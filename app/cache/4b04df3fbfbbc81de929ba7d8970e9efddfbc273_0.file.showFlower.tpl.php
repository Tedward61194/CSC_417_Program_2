<?php
/* Smarty version 3.1.29, created on 2016-03-31 03:32:30
  from "/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/showFlower.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc7e2ea59ce5_74592008',
  'file_dependency' => 
  array (
    '4b04df3fbfbbc81de929ba7d8970e9efddfbc273' => 
    array (
      0 => '/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/showFlower.tpl',
      1 => 1459387944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56fc7e2ea59ce5_74592008 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "localstyle", array (
  0 => 'block_45214632856fc7e2ea42ff4_64984481',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_1686855656fc7e2ea47792_23568580',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'localstyle'}  file:showFlower.tpl */
function block_45214632856fc7e2ea42ff4_64984481($_smarty_tpl, $_blockParentStack) {
?>

<link href="css/table-display.css" rel="stylesheet" />
<style type="text/css">
.showFlower {
  margin-top: 20px;
}
.showFlower tr {
  vertical-align: top;
}
.showFlower tr td:first-child {
  padding-right: 10px;
}
img.flower {
  width: 220px;
  height: 220px;
}
</style>
<?php
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:showFlower.tpl */
function block_1686855656fc7e2ea47792_23568580($_smarty_tpl, $_blockParentStack) {
?>


<table class='showFlower'>
  <tr>
  <td><img class='flower' src="img/flower/<?php echo $_smarty_tpl->tpl_vars['flower']->value->imagefile;?>
" /></td>
  
  <td>
    <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flower']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 (#<?php echo $_smarty_tpl->tpl_vars['flower']->value->id;?>
)</b>
    <br />
    price: $<?php echo $_smarty_tpl->tpl_vars['flower']->value->price;?>

    
    <br />
    <br />
    
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flower']->value->description, ENT_QUOTES, 'UTF-8', true);?>

    
    <br />
    <br />
    
    <b>Cart</b>
      <form>
         GET QUANTITY FORM
      </form>
    </td>
  </tr>
</table>
<?php
}
/* {/block 'content'} */
}
