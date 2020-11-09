<?php

// Foodl Signout Page
// By: Raza Khadim
// Date: 07/10/2020

//ending all the sessions

session_start();
session_unset();
session_destroy();
header("location: ../index.php");
?>