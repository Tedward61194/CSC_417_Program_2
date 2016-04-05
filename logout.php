<?php
require_once "include/session.php";
unset($session->member);
header( "location: ." );
