<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h2>Log In</h2>
  <div class="signup-form-form">
    <form action="includes/login.inc.php" method="post">
      <input type="text" name="userID" placeholder="Username/Email">
      <input type="password" name="pass" placeholder="Password">
      <button type="submit" name="submit">Sign up</button>
    </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>One or more fields were empty!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Sorry we couldn't match that email to that password! Please try again.</p>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
