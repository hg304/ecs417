<?php

include("config.php");
session_start();

if (isset($_POST["submit"]))
{
  $email = $_POST["email"];
  $password = $_POST["password"];

  $res = mysqli_query($conn, "SELECT * FROM USERS WHERE email = '$email' AND password = '$password';");
  if (!$res)
   {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
   }

  $result = mysqli_fetch_array($res);

  if ($result)
  {
    $_SESSION["firstname"] = $result["firstName"];
    header('Location:viewBlog.php');
  }
  else
  {
      $_SESSION["error"] = "Invalid email or password";?>
      <html>
      <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="styling.css">
      </head>

      <body>
        <header>
          <h2>My homepage</h2>
        </header>

        <nav class="navmenu">
          <ul>
            <li><a href="index.php">About me</a></li>
            <li><a href="skills.php">Skills and achievements</a></li>
            <li><a href="education.php">Education</a></li>
            <li><a href="experience.php">Experience</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href=#>Blog</a></li>
          </ul>
        </nav>

        <article class="login">
          <section id="error">
            <?php
            if(!empty($_SESSION["error"]))
            {
              echo "<p>",$_SESSION["error"],"</p>";
            }
            unset($_SESSION["error"]);
            ?>
            <p>To add to the blog you must enter your details below:</p>
          </section>

          <br><br><section>
            <form id="enter" method="POST" action="login.php">
        		<fieldset class="box">
                  <label for="email">Email:</label><br>
                  <input type="text" id="email" name="email">
                  <br><br><label for="password">Password:</label><br>
                  <input type="password" id="password" name="password">
                  <br><br><button type="submit" name="submit" value="submit">Submit</button>
        		      <button type="button" onclick="resetText()" value="reset">Clear</button>
                  <script>
                      function resetText()
                      {
                        document.getElementById("enter").reset();
                      }
                  </script>
        	  </<fieldset>
           </form>
          </section>
        </article>
<?php
  }
}
?>