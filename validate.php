<?php
require_once "include/session.php";
require_once "include/db.php";

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$username = trim($username);  // must be trimmed before using
$member = R::findOne("member", "name=?", [$username]);

if (!isset($member)) {
  $session->username = $username;  // flash
  $session->message = "Authentication Failed (username)";  // flash
  header( "location: login.php" );
}
elseif (hash('sha256', $password) === $member->password) { // OK
  $session->member = (object) [
      'id' => $member->id,
      'name' => $member->name,
      'is_admin' => $member->is_admin,
  ];
  header( "location: ." );
}
else {
  $session->username = $username;
  $session->message = "Authentication Failed (password)";
  header( "location: login.php" );
}
