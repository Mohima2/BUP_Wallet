<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "mohima");

if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}

$sql = "SELECT username FROM reg  WHERE usertype ='user' ORDER BY id";
$result = mysqli_query($conn, $sql);
$name = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<nav>
	
	<div class="logo"> <img src="https://bup.edu.bd/assets/logo-64fa6df59d79c574b53c5162ccbbb4cf3fb102f8e87eaf2fd204f03c8f0a526d.png" class="logo">
    <h1 style="font-size: 20px;"> BUP E-Wallet </h1> </div>
	<div class="menu">
		<a href="file:///D:\xxamp\htdocs/homepage.html">Home</a>	
		
		<a href="file:///D:\xxamp\htdocs/recharge%20option.html" target="_blank">Recharge </a>		
		<a href="file:///D:\xxamp\htdocs/loan.html">  Loan  </a>
		<a href="login.php">Login</a>
		<a href="file:///D:\xxamp\htdocs/signin.html">Log out</a>
	</div>
</nav>

<div class="container">
    <div class="row">
        <?php foreach($name as $a){ ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($a['username']) ?></h6>
                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?username=<?php 
                        echo $a['username'] ?>">Acc</a>
                    </div>
                </div>
            </div>


     <?php   }
     ?>
        
       
    </div>
</div>

</body>
</html>