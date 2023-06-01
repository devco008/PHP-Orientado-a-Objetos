<?php
include 'User.php';
include 'Person.php';
include 'Admin.php';

$user = new User;

$user->type = new Admin;

echo $user->type->greet()."\n";
