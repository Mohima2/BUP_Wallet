<?php
   include_once 'header.php';
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <div class="signup-form">
    <form action="includes/signup.inc.php" method="post">
          <input type="text" class="input-box" placeholder="Your Name" required>
          <input type="email" class="input-box" placeholder="Email Id" required>
          <input type="password" class="input-box" placeholder="Password" required>
          <input type="password" class="input-box" placeholder="Re-Enter Password" required>
          <button type="submit" name="submit">Submit</button>                       
          <input type="checkbox"><span>Remember Me</span>                   
    </form>
    <button type="button" class="btn" onclick="openLogin()">Already have an account?</button>
    </div>

</section>

<script>
    
        var card = document.getElementById("card");
        function openLogin(){
            card.style.transform="rotateY(0deg)";
        }

</script>


<?php
   include_once 'footer.php';
?>


<?php
   include_once 'header.php';
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <div class="signup-form">
    <form action="includes/signup.inc.php" method="post">
          <input type="text" class="input-box" placeholder="Your Name" required>
          <input type="email" class="input-box" placeholder="Email Id" required>
          <input type="password" class="input-box" placeholder="Password" required>
          <input type="password" class="input-box" placeholder="Re-Enter Password" required>
          <button type="submit" name="submit">Submit</button>                       
          <input type="checkbox"><span>Remember Me</span>                   
    </form>
    <button type="button" class="btn" onclick="openLogin()">Already have an account?</button>
    </div>

</section>

<script>
    
        var card = document.getElementById("card");
        function openLogin(){
            card.style.transform="rotateY(0deg)";
        }

</script>


<?php
   include_once 'footer.php';
?>
