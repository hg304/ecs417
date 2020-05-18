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
      <li><a href=#>Experience</a></li>
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
      <img src="https://www.andiamo.co.uk/wp-content/uploads/2018/08/work_experience.jpg">
    </figure>

    <article class="info">
      <h2>Part-time Employment</h2>
      <h3><pre>April 2019 - July 2019   Customer Service Advisor   Pex Media</pre></h3>
      <ul>
        <li>Dealt with concerns from clients that call regarding the services of the company</li>
        <li>Provided support to clients that use the services and give them recommendations based on their interests</li>
        <li>Processed order via online chat and telephone</li>
      </ul><hr>

      <h3><pre>September 2015 - August 2017     Assistant Manager    Market Stall</pre></h3>
      <ul>
        <li>Assisted and advised customers with their inquiries about any product and also sell products to them</li>
        <li>Created work schedules for workers and recorded sales information for each week with Microsoft Office</li>
        <li>Liaised with wholesalers so we could buy products to sell in our stall and managed our budget</li>
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

   <footer>
