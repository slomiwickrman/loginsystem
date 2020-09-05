<?php
  session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <!--<link rel="stylesheet" href="style.css">-->
  </head>
  <body>

    <header>
      <nav>
        <a href="#">
<!--          <img src="images" alt"logo">  -->
        </a>
        <ul>
          <li><a href="index.php">home</a></li>
          <li><a href="#">about</a></li>
          <li><a href="#">contact</a></li>
        </ul>
        <div class="header-login">
          <?php
          if (isset($_SESSION['userId'])) {
            echo '<<form action="includes/logout.inc.php" methid="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form>';
          }
          else {
            echo '<form action="includes/login.inc.php" method="post">
              <input type="text"  name="mailuid" placeholder="Username/Email">
              <input type="password"  name="pwd" placeholder="Password">
              <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
          }
          ?>
        </div>
      </nav>
    </header>
