<?php
session_start();
$user_list = [
    ['login' => 'Maria', 'password' => password_hash(111,PASSWORD_DEFAULT)], 
    ['login' => 'Anna', 'password' => password_hash(111,PASSWORD_DEFAULT)], 
    ['login' => 'Mira', 'password' => password_hash(111,PASSWORD_DEFAULT)], 
];