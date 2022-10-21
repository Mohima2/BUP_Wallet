<?php

include("connect.php");

if(isset($_POST['login'])){
    $sql = mysqli_query($conn,
    "SELECT * FROM REG WHERE username='"
	. $_POST["username"] . "' AND
	password='" . $_POST["pwd"] . "' ");
    
    $num = mysqli_num_rows($sql);

    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        
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

    else {

        ?>
        <hr>
        <font color="red"><b>
                <h3>Sorry Invalid Username and Password<br>
                    Please Enter Correct Credentials</br></h3>
            </b>
        </font>
        <hr>
        
        <?php
            }
        }

?>
