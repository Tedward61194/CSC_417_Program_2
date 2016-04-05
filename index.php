<?php
require_once "include/session.php";
require_once "include/smarty.php";
require_once "include/db.php";
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');


$flowers = R::find('flower');

$data = [
  'page_title' => 'Home',
  'flowers' => $flowers,
];
$smarty->assign($data);
$smarty->display("index.tpl");
