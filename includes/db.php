<?php

session_start();

$dsn = 'mysql:host=localhost;dbname=forumLePoles';
$user = 'lepoles';
$pass = 'lepoles';

$pdo = new PDO($dsn, $user, $pass);
