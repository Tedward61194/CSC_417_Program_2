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

$cancel = filter_input(INPUT_POST, 'cancel');
if (!is_null($cancel)) {
  header("location: .");
  exit();
}

$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price');
$description = filter_input(INPUT_POST, 'description');
$imagefile = filter_input(INPUT_POST, 'imagefile');
$instock = filter_input(INPUT_POST, 'instock');


try {
  // trim before using
  $price = trim($price);
  $name = trim($name);
  $imagefile = trim($imagefile);
  $instock = trim($instock);
  

  if (strlen($name) < 6) {
    throw new Exception("name must have at least 6 chars");
  }
  if (!preg_match("/^[0-9]+(\.[0-9]{2})?$/", $price)) {
    throw new Exception("illegal price format");
  }
  if (!is_numeric($instock) || $instock < 0) {
    throw new Exception("instock must be a positive integer");
  }
  $flowerWithTitle = R::findOne('flower', "name=?", [$name]);
  if (!is_null($flowerWithTitle)) {
    throw new Exception("flower with this name already exists");
  }

  $flower = R::dispense('flower');
  $flower->name = $name;
  $flower->price = $price;
  $flower->description = $description;
  $flower->imagefile = $imagefile;
  $flower->instock = $instock;
  $id = R::store($flower);
  header("location: showFlower.php?flower_id=$id");
  exit();
}
catch (Exception $ex) {
  $message = $ex->getMessage();
}

$data = [
    'name' => $name,
    'price' => $price,
    'description' => $description,
    'imagefile' => $imagefile,
    'instock' => $instock,
    'message' => $message,
];
$smarty->assign($data);
$smarty->display("addFlower.tpl");

