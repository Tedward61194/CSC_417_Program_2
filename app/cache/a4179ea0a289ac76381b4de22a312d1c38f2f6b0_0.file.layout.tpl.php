<?php
/* Smarty version 3.1.29, created on 2016-03-28 22:30:05
  from "/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f9944d033908_40625193',
  'file_dependency' => 
  array (
    'a4179ea0a289ac76381b4de22a312d1c38f2f6b0' => 
    array (
      0 => '/Users/laurazakowski/NetBeansProjects/FlowerShop/templates/layout.tpl',
      1 => 1459196947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:links.tpl' => 1,
  ),
),false)) {
function content_56f9944d033908_40625193 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  
      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? basename(dirname($_SERVER['PHP_SELF'])) : $tmp);?>

    </title>
    <link href="css/nav.css" rel="stylesheet" />
    <link href="css/layout.css" rel="stylesheet" />
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "localstyle", array (
  0 => 'block_100542926156f9944d021ce6_60080480',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </head>
  <body>
  <main>

  <header>
    <img src="img/header.png" />
    <span class="caption"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['session']->value->user->name)===null||$tmp==='' ? '' : $tmp);?>
</span>
  </header>
    
  <nav>
  <ul>
  <li><a href="#" class="no-action"><img class="menu" src="img/menu.png" /></a>
  <ul>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </ul>
  </li>
  </ul>
  </nav>
  
  <section>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_38969148256f9944d030090_76789114',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </section>
  
  </main>
  <?php echo '<script'; ?>
 type="text/javascript">window.onunload = function(){}<?php echo '</script'; ?>
>
  </body>
</html>
<?php }
/* {block 'localstyle'}  file:layout.tpl */
function block_100542926156f9944d021ce6_60080480($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:layout.tpl */
function block_38969148256f9944d030090_76789114($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
}
