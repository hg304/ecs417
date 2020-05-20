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
      <li><a href="education.php">Education</a></li>
      <li><a href="experience.php">Experience</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php
        session_start();
        if (!isset($_SESSION["firstname"]) || empty($_SESSION["firstname"]))
        {
          echo "<li><a href='viewBlognotlogged.php'>Blog</a></li>";
        }
        else
        {
          echo "<li><a href='viewBloglogged.php'>Blog</a></li>";
          echo "<li><a href='logout.php'>Log Out</a></li>";
        }
      ?>
    </ul>
  </nav>

    <section id="left">
      <article class="info">
        <h2>About me</h2>
        <ul>
          <li>Welcome to my portfolio. My name is Hasibullah Ghulamhaidar and I am a first year student.</li>
          <li>I'm currently studying at Queen Mary. I'm studying for a Bachelor of Science degree in Computer Science.</li>
          <li>Following graduation, I plan to take a masters degree before starting work to increase my knowledge.</li>
          <li>I am passionate about computers and enjoy learning more during my free time in addition to my lectures and labs at Queen Mary.</li>
          <li>I enjoy looking at articles relating to Technology and Computer Science, primarily about Cryptocurrency and state-of-the-art tech.</li>
          <li>I have many hobbies outside education, I enjoy sports, especially American Football and Basketball.</li>
          <li>I also enjoy playing video games whenever I am free, it also helps with my problem solving skills.</li>
          <li>I enjoy volunteering and have volunteered for many things, some include teaching young kids sports as well as performing charity work.<li>
        </ul><hr>
      </article>
      <article class="info">
        <h2>My skills</h2>
        <ul>
          <li>Competent in <strong>Microsoft Office</strong> applications such as <strong>Word</strong> and <strong>Excel</strong>.</li>
          <li>Experienced in working with operating systems, with high proficiency in <strong>Windows XP</strong>, <strong>Vista</strong>, <strong>7</strong> and <strong>10</strong> environments.</li>
          <li>Know <strong>Python</strong>, <strong>Visual Basic</strong> and <strong>Java</strong> programming languages as well as <strong>PHP</strong>, <strong>JavaScript</strong> and <strong>HTML</strong>.</li>
          <li>I am <strong>flexible</strong>, so I can perform tasks given to me at <strong>any time</strong></li>
          <li><strong>Multilingual</strong> in various languages and can read <strong>English</strong>, <strong>Arabic</strong> and <strong>Cyrillic</strong> scripts.</li>
          <li>Able to get work done <strong>on time</strong> and <strong>meet deadlines</strong>.</li>
          <li>I am a <strong>team player</strong>, I <strong>work well</strong> with <strong>others</strong> in teams and I frequently <strong>contribute</strong> to solutions.</li>
          <li>High ability to <strong>communicate</strong> with others via <strong>phone</strong> and <strong>face-to-face</strong>, given my experience with volunteering and previous jobs.</li>
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
          echo       "<input type='email' id='email' name='email'>";
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
</body>
