<?php
/* Smarty version 3.1.29, created on 2016-04-04 19:30:48
  from "/home/teddy/NetBeansProjects/FlowerShop/templates/addFlower.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5702f928097891_44852443',
  'file_dependency' => 
  array (
    'd3e6cf4d4a7cfee079d3a7bef2978b763adf3904' => 
    array (
      0 => '/home/teddy/NetBeansProjects/FlowerShop/templates/addFlower.tpl',
      1 => 1459445952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5702f928097891_44852443 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "localstyle", array (
  0 => 'block_6146350165702f92807cf52_89918628',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_15980864915702f92807eed6_99792101',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'localstyle'}  file:addFlower.tpl */
function block_6146350165702f92807cf52_89918628($_smarty_tpl, $_blockParentStack) {
?>

<link href="css/table-display.css" rel="stylesheet" />
<?php
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:addFlower.tpl */
function block_15980864915702f92807eed6_99792101($_smarty_tpl, $_blockParentStack) {
?>

  <h2>Add Flower</h2>

  <form action="addFlowerReentrant.php" method="post">
    <table>
      <tr>
        <td>name: </td>
        <td>
          <input type="text" name="name" size="40" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        </td>
      </tr>
      <tr>
        <td>price: </td>
        <td>
          $<input type="real" name="price" size="40" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        </td>
      </tr>
      <tr>
        <td>description: </td>
        <td>
            <textarea itemtype = "text" name="description" cols="40" rows="5" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
"></textarea>
        </td>
      </tr>
      <tr>
        <td>imagefile: </td>
        <td>
            <input type ="text" name="imagefile" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imagefile']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></p>
        </td>
      </tr>
      <tr>
        <td>instock: </td>
        <td>
        <input type="text" name="instock" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instock']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        </td>
      </tr>
      <tr>
        <td></td><td>
          <button type="submit" name="doit">Add</button>
          <button type="submit" name="cancel">Cancel</button>
        </td>
      </tr>
    </table>

    <h3><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h3>
  </form>
<?php
}
/* {/block 'content'} */
}
