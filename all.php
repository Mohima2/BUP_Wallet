<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website2</title>
    <link rel="stylesheet" href="a.css">
    
    
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">BUP E-Wallet</h2>
            </div>

            <div class="menu">
                <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Contact</a></li>
                        
                </ul>
            </div>


            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type Here">
                <a href="#"><button class="btn">Search</button></a>
            </div> 
        </div>

        <div class="content">
            <h1>Web Design &<br><span>Development</span><br>Course</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                 Quisquam doloribus culpa est magni necessitatibus nesciunt, ex modi perspiciatis praesentium a
                 ,<br> natus assumenda tempora iusto! Repellendus molestias facilis cupiditate ex dignissimos!</p>

                 <button class="cn"><a href="#">Join Us</a></button>


                 <div class="form">
                    <h2>SignUp</h2>
                    <input type="email" name="email" placeholder="Enter Email Address">
                    <input type="password" name="password" placeholder="Enter Password">
                    <button class="btn"><a href="#">Login</a></button>

                    <p class="link">Don't Have an Account<br>
                    <a href="#">SignUp</a> Here</p>
                    <p class="liw">Log In With</p>
                 </div>
        </div>
    </div>

    
    <?php
   include_once 'header.php';
?>

<section class="signup-form">
    <h2>Log In</h2>
    <div class="signup-form" id="card">
    <form action="login.inc.php" method="post">
          <input type="text" class="input-box" placeholder="User-name/ Email" required>    
          <input type="password" class="input-box" placeholder="Password" required>
          <button type="submit" class="submit-btn">Log In</button>                       
          <input type="checkbox"><span>Remember Me</span>                   
    </form>
    </div>
</section>


<?php
   include_once 'footer.php';
?>







</body>
</html>