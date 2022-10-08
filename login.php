<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Registration</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
             
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="log2.php" method="POST">
                        <input type="text" class="input-box" placeholder="User ID" name="username" required>
                        <input type="password" class="input-box" placeholder="Password" name="password" required>
                        <button type="submit" class="submit-btn">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>

                    </form>
                    <button type="button" class="btn" onclick="openRegister()">I'm new here</button>
                    <a href="">Forget Password</a>
                </div>
            
                <div class="card-back">
                    <h2>Register</h2>
                    <form action="reg.php" method="POST">
                        <input type="text" class="input-box" placeholder="Student Id" name="uid" required>
                        <input type="email" class="input-box" placeholder="Email Id" name="email" required>
                        <input type="password" class="input-box" placeholder="Password" name="pwd" required>
                        <button type="submit" class="submit-btn" name="submit">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">Already have an account?</button>
                    
               
                </div>  
            </div>
        </div>
    </div>
    <script>
        var card = document.getElementById("card");

        function openRegister(){
            card.style.transform="rotateY(-180deg)";
        }

        function openLogin(){
            card.style.transform="rotateY(0deg)";
        }

    </script>
    
</body>
</html>
