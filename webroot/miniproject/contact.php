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
      <li><a href=#>Contact</a></li>
      <?php
        session_start();
        if (!isset($_SESSION["firstname"]) || empty($_SESSION["firstname"]))
        {
          echo "<li><a href='login.html'>Blog</a></li>";
        }
        else
        {
          echo "<li><a href='viewBlog.php'>Blog</a></li>";
          echo "<li><a href='logout.php'>Log Out</a></li>";
        }
      ?>
    </ul>
  </nav>

  <section id="left">
    <article class="info">
      <h2>Contact details</h2>
      <h3>You can contact me with the following:</h3>
      <p>Mailing address:<br>38 Cobham Close<br>Edgware<br>Middlesex<br>HA8 5QG</p>
      <p>E-mail address:<br>hasib78680@gmail.com</p>
      <p>Mobile number:<br>07497479859</p>
    </article>
  </section>

  <aside style="float: right; padding: 10px; width: 15%">
    <article>
    <?php
      session_start();
      if (!isset($_SESSION["firstname"]) || empty($_SESSION["firstname"]))
      {
        echo "<p style='font-family: Tahoma float: right;'><strong>Not logged in</strong></p>";
        echo "<form id='enter' method='POST' action='login.php'>";
    		echo "<fieldset style='background-color: #3176f5; font-family: Tahoma; color: white;'>";
        echo       "<label for='email'>Email:</label><br>";
        echo       "<input type='text' id='email' name='email'>";
        echo       "<br><label for='password'>Password:</label><br>";
        echo       "<input type='password' id='password' name='password'>";
        echo       "<br><br><button type='submit' name='submit' value='submit'>Submit</button>";
    	  echo "</fieldset>";
        echo "</form>";
      }
      else
      {
        echo "<p><strong>Welcome ", $_SESSION["firstname"], "</strong></p>";
      }
     ?>
   </article>
   </aside>