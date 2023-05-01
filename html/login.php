<?php
    include_once "header.php";
?>

<link rel="stylesheet" href="/css/login-styles.css">
<div class="main-login"> 
  <div class="wrapper">
    <h2>Login</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Email" required>
        
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>Forgot your <a href="#">password</a>?</h3>
        <h3>Don't have an account? <a href="/html/register.php">Register now</a></h3>
      </div>
    </form>
  </div>
</div> 

<?php
    include_once "footer.php";
?>