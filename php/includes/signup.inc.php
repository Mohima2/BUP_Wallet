<?php

if(isset($_POST["submit"])){
    echo "It Works!";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup !== false){
        

    }


}
else{
    header("location: ../signup.php");
}