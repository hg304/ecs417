<html>
<head>
  <title>Portfolio</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
</head>

<body>
  <header>
    <h2>My portfolio</h2>
  </header>

  <nav class="navmenu">
    <ul>
      <li><a href="index.php">About me</a></li>
      <li><a href="education.php">Education</a></li>
      <li><a href="experience.php">Experience</a></li>
      <li><a href=#>Portfolio</a></li>
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
        <h2>Projects that I created</h2><br>
        <ul>
          <h3>An adventure game for my OOP module: <a href="adventure.zip" download>Click to download</a></h3>
          <li>An adventure game written in Java</li>
          <li>You must escape the castle whilst you come across enemies</li>
          <li>You will encounter enemies which you must fight and  you can collect buffs on the way.</li>
        </ul><br>
        <ul>
          <h3>An impossible quiz for my Procedural programming module: <a href="proceduralprojects.zip" download>Click to download</a></h3>
          <li>The miniproject is an impossible quiz where you have a question with three answers</li>
          <li>One is correct and the others are incorrect. One of the incorrect answers is an impossible answer</li>
          <li>If you pick the impossible answer then you will lose all your marks</li>
          <li>There is also an admin section where you can add your own questions into the quiz</li>
        </ul>
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
     </article>
     <footer>
       <small><strong>Copyright &copy Hasibullah Ghulamhaidar 2020</strong></small>
     </footer>
     </aside>
