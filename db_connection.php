<?php 

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

 //connect to database
$db = new mysqli('localhost' , 'root' , '', 'registration');
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();


}