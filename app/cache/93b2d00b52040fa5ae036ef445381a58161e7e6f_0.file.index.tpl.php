<?php
/* Smarty version 3.1.29, created on 2016-03-31 01:32:33
  from "/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc6211376d01_67884272',
  'file_dependency' => 
  array (
    '93b2d00b52040fa5ae036ef445381a58161e7e6f' => 
    array (
      0 => '/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/index.tpl',
      1 => 1459380750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56fc6211376d01_67884272 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'localstyle', array (
  0 => 'block_137227372356fc621130e966_32309609',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_27951204856fc6211315bf2_51887816',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'localstyle'}  file:index.tpl */
function block_137227372356fc621130e966_32309609($_smarty_tpl, $_blockParentStack) {
?>

<style type='text/css'>
  img.flower {
    width: 50px;
    height: 50px;
  }
  .showFlowers tr td:first-child {
    padding-right: 10px;
  }
  .setOrder {
    position: absolute;
    top: 10px;
    right: 10px;
  }
</style>
<?php
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:index.tpl */
function block_27951204856fc6211315bf2_51887816($_smarty_tpl, $_blockParentStack) {
?>

<h2>Listing (by ...)</h2>

<form class='setOrder' action='setOrder.php'>
    <button>list by: </button>  <select> <option>name</option><option>price</option></select>
</form>

<table class='showFlowers'>
  <?php
$_from = $_smarty_tpl->tpl_vars['flowers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_flower_0_saved_item = isset($_smarty_tpl->tpl_vars['flower']) ? $_smarty_tpl->tpl_vars['flower'] : false;
$_smarty_tpl->tpl_vars['flower'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['flower']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['flower']->value) {
$_smarty_tpl->tpl_vars['flower']->_loop = true;
$__foreach_flower_0_saved_local_item = $_smarty_tpl->tpl_vars['flower'];
?>
  <tr>
    <td>
      <a href="showFlower.php?flower_id=<?php echo $_smarty_tpl->tpl_vars['flower']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flower']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
      <br />
      price: $<?php echo $_smarty_tpl->tpl_vars['flower']->value->price;?>

    </td>
    <td><img class='flower' src="img/flower/<?php echo $_smarty_tpl->tpl_vars['flower']->value->imagefile;?>
" /></td>
  </tr>
  <?php
$_smarty_tpl->tpl_vars['flower'] = $__foreach_flower_0_saved_local_item;
}
if ($__foreach_flower_0_saved_item) {
$_smarty_tpl->tpl_vars['flower'] = $__foreach_flower_0_saved_item;
}
?>
</table>

<?php
}
/* {/block 'content'} */
}
