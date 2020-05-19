<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
</head>

<body>
  <header>
    <h2>My education</h2>
  </header>

  <nav class="navmenu">
    <ul>
      <li><a href="index.php">About me</a></li>
      <li><a href="skills.php">Skills and achievements</a></li>
      <li><a href=#>Education</a></li>
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
      <figure id="pic">
        <img src="https://media.wsimag.com/attachments/7fa16d4e489e524267badc71bf916a5e68bec488/store/fill/1090/613/c1e83957fe71d36adeb4b070c1573135072a8b6331e18a2f5f7e163c769f/Venezuela-does-not-appear-in-the-Global-Teacher-Status.jpg">
      <article class="info">
        <h2>Education</h2>
        <h3><pre>2019-present     BSc Computer Science    Queen Mary University of London</pre></h3>
        <ul>
          <li>Currently pursuing a Bachelor's Degree in Computer Science.</li>
        </ul><hr>
        <h3><pre>2011-2018     Kingsbury High School</pre></h3>
        <ul>
          <li>10 GCSEs A-C including English Language and Maths</li>
          <li>Distinction* in BTEC IT</li>
          <li>Passed 2 A-Levels</li>
        </ul><hr>
      </article>
    </section>

    <aside>
      <article>
      <?php
        session_start();
        if (!isset($_SESSION["firstname"]) || empty($_SESSION["firstname"]))
        {
          echo "<p style='font-family: Tahoma float: right;'><strong>Not logged in</strong></p>";
          echo "<form id='enter' method='GET' action='login.php'>";
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
       <footer>
         <small><strong>Copyright &copy Hasibullah Ghulamhaidar 2020</strong></small>
       </footer>
     </aside>

 </body>
