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

$flower_id = filter_input(INPUT_POST, 'flower_id');

if (!is_null($cancel)) {
  header("location: showFlower.php?flower_id=$flower_id");
  exit();
}

$flower_id = R::load('flower', $flower_id);

$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price');
$description = filter_input(INPUT_POST, 'description');

try {
  // trim before using
  $quantity = trim($quantity);
  $title = trim($title);

  if (strlen($title) < 3) {
    throw new Exception("name must have at least 3 chars");
  }
  if (!preg_match("/^\d+$/", $quantity)) {
    throw new Exception("illegal price format");
  }
  $bookWithTitle = R::findOne('flower', "name=?", [$name]);
  if (!is_null($flowerWithName) && $flowerWithName->id != $flower->id) {
    throw new Exception("already exists flower with this name");
  }

  $flower->name = $name;
  $flower->price = $price;
  $flower->description = $description;
  $id = R::store($book);
  header("location: showFlower.php?flower_id=$id");
  exit();
}
catch (Exception $ex) {
  $message = $ex->getMessage();
}

$data = [
    'message' => $message,
    'name' => $name,
    'price' => $price,
    'description' => $description,
    'flower_id' => $flower_id,
];
$smarty->assign($data);
$smarty->display("modifyFlower.tpl");
