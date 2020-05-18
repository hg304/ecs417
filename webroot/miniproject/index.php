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
      <li><a href=#>About me</a></li>
      <li><a href="skills.php">Skills and achievements</a></li>
      <li><a href="education.php">Education</a></li>
      <li><a href="experience.php">Experience</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="contact.php">Contact</a></li>
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
      <h2>About me</h2>
      <p style="float: left;">Welcome to my portfolio. My name is Hasibullah Ghulamhaidar and I am a first year student<br>currently studying at Queen Mary. I am studying for
      a Bachelor of Science degree in computer Science. I plan to take a masters degree once I graduate. I am<br>passionate about computers and enjoy using them. I also enjoy learning more about computers during my<br>free time in addition to my lectures and labs at Queen Mary.</p>
    </article>
  </section>

  <aside>
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

  <br><footer>
    <small><strong>Copyright &copy Hasibullah Ghulamhaidar 2020</strong></small>
  </footer>
</body>
