<?php

include 'sunible_fn.php';

$return = submitSignUp(
$_REQUEST['first_name'],
$_REQUEST['last_name'],
$_REQUEST['email'],
$_REQUEST['reason'],
$_REQUEST['zipcode']);
?>

