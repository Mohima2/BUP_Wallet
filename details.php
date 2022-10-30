<?php


$conn = mysqli_connect("localhost", "root", "", "mohima");
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}

if(isset($_GET['username'])){
    $username= mysqli_real_escape_string($conn, $_GET['username']);
    $sql = "SELECT * FROM reg where username='$username'";
    $result = mysqli_query($conn, $sql);
    $c = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);

}

?>

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
    <div class="container center">
        <?php if($c): ?>
            <h4><?php echo $c['username']; ?></h4>
            <h4><?php echo $c['email']; ?></h4>
            <?php else: ?>
                <h5>No User Account Exists!
                </h5>
                <?php endif?>
    </div>
</body>
</html>