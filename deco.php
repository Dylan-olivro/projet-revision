<?php
require_once('./class/User.php');

$user = new User('', '', '', '', '', '');
$user->disconnect();
header('Location: index.php');
