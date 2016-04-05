<?php
require_once "include/session.php";

$field = filter_input(INPUT_GET, 'field');

$session->order[$session->display] = $field;

header("location: .");