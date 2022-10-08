<?php

$host = "localhost";
$user = "root" ;
$password = "";
$db="mohima";

$data = mysqli_connect($host,$user,$password,$db);

if($data === false){
    die("Connection Error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

   $sql = "SELECT * FROM login where username='".$username."' AND password='".$password."' " ;
    
    $result = mysqli_query($data , $sql);

    $row = mysqli_fetch_array($result);

    if($row["usertype"]=="user"){
       $_SESSION["username"]=$username; 
       header("location:home.php");
    }

    elseif($row["usertype"]=="admin"){
        $_SESSION["username"]=$username; 
        header("location:adminhome.php");
    }

    else{
        
    }

}

?>
