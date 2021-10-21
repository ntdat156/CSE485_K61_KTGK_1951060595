<?php 
    //Start Session
    if(!isset($_SESSION)){
        session_start();
    }
    define("SITEURL","http://localhost/blood/");

    //Create Constants to Store Non Repeating Values
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'blood_donor';

    
    $conn = mysqli_connect($localhost,$username, $password , $db_name  ) ; //Database Connection
  

?>