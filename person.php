<?php
    session_start();
    $_POST=array("fname"=>"Jim ", "lname"=>"Smith");
    print_r($_POST);
    echo "Firstname is ".$_POST["fname"];
    echo "Lastname is ".$_POST["lname"];
    $_SESSION["fnameAndLname"]=$_POST;
    print_r($_SESSION);
?>