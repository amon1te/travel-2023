<?php
    include_once "header.php";
?>

<link rel="stylesheet" href="/css/register-styles.css">
<div class="main-login"> 
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Username" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>
      <div class="terms">
        <input type="checkbox">
        <h3>I accept all terms & conditions</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="/html/login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</div> 

<?php
    include_once "footer.php";
?>