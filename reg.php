<?php

session_start();

$host = "localhost";
$user = "root" ;
$password = "";
$db="wallet";

$data = mysqli_connect($host,$user,$password,$db);

if($data === false){
    die("connection error");
}

if(isset($_POST['submit'])){
    $userid = $_POST['userid'];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

   $sql = "INSERT INTO login(userid,email,password,usertype) VALUES ('$userid','$email','$password','$usertype')";
    $result = mysqli_query($data , $sql);

    if($result){
      
        $_SESSION['message'] = "Registration Complete";
        header("location: home.php");

    }
    else{
        echo "Registration Failed!";
    }


}
?>