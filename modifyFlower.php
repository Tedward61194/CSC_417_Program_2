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

$flower_id = filter_input(INPUT_GET, 'flower_id');
$flower = R::load('flower', $book_id);

$title = $book->title;
$binding = $book->binding;
$quantity = $book->quantity;
$message = "";

$data = [
    'message'  => $message,
    'name'    => $name,
    'price' => $price,
    'description'  => $description,
    'flower_id'  => $flower_id,
];
$smarty->assign($data);
$smarty->display("modifyFlower.tpl");
