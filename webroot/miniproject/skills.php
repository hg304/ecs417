<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
</head>

<body>
  <header>
    <h2>My skills</h2>
  </header>

  <nav class="navmenu">
    <ul>
      <li><a href="index.php">About me</a></li>
      <li><a href=#>Skills and achievements</a></li>
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

  <section>
    <section id="left">
      <article class="info">
        <h2>My skills</h2><br>
        <ul>
          <li>Competent in <strong>Microsoft Office</strong> applications such as <strong>Word</strong> and <strong>Excel</strong>.</li>
          <li>Experienced in working with operating systems, with high proficiency in <strong>Windows XP</strong>, <strong>Vista</strong>, <strong>7</strong> and <strong>10</strong> environments.</li>
          <li>Know <strong>Python</strong>, <strong>Visual Basic</strong> and <strong>Java</strong> programming languages as well as <strong>PHP</strong>, <strong>JavaScript</strong> and <strong>HTML</strong>.</li>
          <li>I am <strong>flexible</strong>, so I can perform tasks given to me at <strong>any time</strong></li>
          <li>Able to get work done <strong>on time</strong> and <strong>meet deadlines</strong>.</li>
        </ul>
      </article>
      <footer>
        <small><strong>Copyright &copy Hasibullah Ghulamhaidar 2020</strong></small>
      </footer>
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

 </body>
