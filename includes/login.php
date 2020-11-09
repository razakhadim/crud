<?php 
session_start();
require_once ("../classes/database.class.php");
require_once ("../classes/user.class.php");

$user = new User();

if (isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user->login($email, $password);
    
}
