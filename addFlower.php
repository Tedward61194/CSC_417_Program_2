<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');

if (!isset($session->member)) {
  header("location: login.php");
  exit();
}
if (!$session->member->is_admin) { // not an admin
  die("Prohibited");
}

$data = [
    'name' => '',
    'price' => '',
    'description' => '',
    'imagefile' => '',
    'instock' => ''
];
$smarty->assign($data);
$smarty->display("addFlower.tpl");

