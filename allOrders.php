<?php
require_once "include/smarty.php";
require_once "include/session.php";
require_once "include/db.php";
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');

if (!isset($session->member)) {
  header("location: login.php");
  exit();
}

$member = R::load('member', $session->member->id);

$email = filter_input(INPUT_POST, 'email');

$doit = filter_input(INPUT_POST, 'doit');

$message = '';

if (!is_null($doit)) {
  try {
    // trim before using
    $email = trim($email);
    
    $valid = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($valid === false) {
      throw new Exception("invalid email");
    }

    $member->email = $email;
    $id = R::store($member);
    header("location: showMember.php?member_id=$id");
    exit();
  }
  catch (Exception $ex) {
    $message = $ex->getMessage();
  }
}
else {
  $email = $member->email;
}

$data = [
    'username' => $member->name,
    'email'    => $email,
    'message'  => $message,
];

$smarty->assign($data);
$smarty->display("allOrders.tpl");
