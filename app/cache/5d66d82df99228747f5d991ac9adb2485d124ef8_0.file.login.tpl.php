<?php
/* Smarty version 3.1.29, created on 2016-03-28 22:36:10
  from "/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f995ba961b11_40983547',
  'file_dependency' => 
  array (
    '5d66d82df99228747f5d991ac9adb2485d124ef8' => 
    array (
      0 => '/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/login.tpl',
      1 => 1459197349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56f995ba961b11_40983547 ($_smarty_tpl) {
if (!is_callable('smarty_function_flash_get')) require_once '/Users/laurazakowski/NetBeansProjects/FlowerShop/include/myplugins/function.flash_get.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "localstyle", array (
  0 => 'block_53314305056f995ba8cf898_23426732',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_150563564056f995ba8d3ee7_90819054',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'localstyle'}  file:login.tpl */
function block_53314305056f995ba8cf898_23426732($_smarty_tpl, $_blockParentStack) {
?>

<link href="css/table-display.css" rel="stylesheet" />
<?php
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:login.tpl */
function block_150563564056f995ba8d3ee7_90819054($_smarty_tpl, $_blockParentStack) {
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
