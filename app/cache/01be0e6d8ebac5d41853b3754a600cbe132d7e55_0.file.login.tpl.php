<?php
/* Smarty version 3.1.29, created on 2016-04-04 19:30:39
  from "/home/teddy/NetBeansProjects/FlowerShop/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5702f91f9d9068_06224485',
  'file_dependency' => 
  array (
    '01be0e6d8ebac5d41853b3754a600cbe132d7e55' => 
    array (
      0 => '/home/teddy/NetBeansProjects/FlowerShop/templates/login.tpl',
      1 => 1459197348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5702f91f9d9068_06224485 ($_smarty_tpl) {
if (!is_callable('smarty_function_flash_get')) require_once '/home/teddy/NetBeansProjects/FlowerShop/include/myplugins/function.flash_get.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "localstyle", array (
  0 => 'block_16375200205702f91f9c0bd2_22766064',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_2692907555702f91f9c2953_11693605',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'localstyle'}  file:login.tpl */
function block_16375200205702f91f9c0bd2_22766064($_smarty_tpl, $_blockParentStack) {
?>

<link href="css/table-display.css" rel="stylesheet" />
<?php
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:login.tpl */
function block_2692907555702f91f9c2953_11693605($_smarty_tpl, $_blockParentStack) {
?>

<h2>Login</h2>

<p>Please enter access information</p>
<form action="validate.php" method="post" autocomplete="off">
  <table>
    <tr>
      <th>user:</th>
      <td><input type="text" name="username" autofocus="on"
                 value="<?php ob_start();
echo smarty_function_flash_get(array('key'=>'username'),$_smarty_tpl);
$_tmp1=ob_get_clean();
echo htmlspecialchars($_tmp1, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
    </tr>
    <tr>
      <th>password:</th>
      <td><input type="password" name="password" /></td>
    </tr>
    <tr>
      <td></td>
      <td><button type="submit">Access</button></td>
    </tr>
  </table>
  
  <h3><?php ob_start();
echo smarty_function_flash_get(array('key'=>'message'),$_smarty_tpl);
$_tmp2=ob_get_clean();
echo $_tmp2;?>
</h3>
</form>
<?php
}
/* {/block 'content'} */
}
