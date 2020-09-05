<?php
  require "header.php";
?>

    <main>
      <div class="wrapper-main>">
        <section class="section-default">
          <h1>Signup</h1>
          <?php
          if(isset()$_GET['error')) {
            if($_GET['error'] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields</p>';
            }
            else if ($_GET['error'] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and email</p>'

            }
            else if ($_GET['error'] == "invaliduid") {
              echo '<p class="signuperror">Invalid username</p>'

            }
            else if ($_GET['error'] == "passwordcheck") {
              echo '<p class="signuperror">Passwords do not match</p>'

            }
            else if ($_GET['error'] == "usertaken") {
              echo '<p class="signuperror">Username taken</p>'

            }
          else if ($_GET['signup'] == "success");
            echo '<p class="signupsuccess">signup successful</p>';

        }

        ?>


          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name"uid" placeholder="username">
            <input type="text" name"mail" placeholder="email">
            <input type="password" name"pwd" placeholder="password">
            <input type="password" name"pwd-repeat" placeholder="confirm password">
            <button type="submit" name="signup-dubmit">signup</button>
          </form>
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
