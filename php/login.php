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
