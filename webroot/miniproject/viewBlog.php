<html>
<head>
  <title>My blog</title>
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
      <li><a href='logout.php'>Log Out</a></li>
    </ul>
  </nav>

  <section>
    <article class="add">
    <button type="button" onclick="location.href='addPost.html'">Add post</button>
  </article>
</section><br>

  <section>
    <h2 style="font-family: Tahoma;">Recent blog posts:</h2>
    <article class="blogbox">
    <?php
      include("config.php");

      $res = mysqli_query($conn, "SELECT * FROM BLOG;");
      if (!$res)
       {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
       }

       $rows = mysqli_num_rows($res);

       for ($i = $rows; $i > 0; $i--)
       {
         $res2 = mysqli_query($conn, "SELECT * FROM BLOG WHERE id = '$i';");
         if (!$res2)
          {
           printf("Error: %s\n", mysqli_error($conn));
           exit();
          }

         $result = mysqli_fetch_array($res2);

         echo "<h3><style='font-family: Tahoma; text-align: center; color: white;'>", $result["title"], "</h3><p><style='color: white; font-family: Tahoma;'>", $result[description], "</p><p><br><small style='color:white; font-family:Tahoma;'>", date("d/m/y g:i A", strtotime($result["datepost"])), "</small></p><hr>";
       }
     ?>
   </article>
   </section>
 </body>
