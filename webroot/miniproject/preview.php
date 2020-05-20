<html>
<head>
  <title>Preview</title>
  <link rel="stylesheet" type="text/css" href="reset.css">
</head>

<body>
  <nav class="navmenu">
    <ul>
      <li><a href="index.php">About me</a></li>
      <li><a href="education.php">Education</a></li>
      <li><a href="experience.php">Experience</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href=#>Blog</a></li>
      <li><a href='logout.php'>Log Out</a></li>
    </ul>
  </nav>

  <section class="topme">
    <article class="add">
      <p>The first post shown is the post you are currently previewing. Do you wish to upload this?</p><br>
      <button type="button" onclick="location.href='addPost.php'">Send</button>
      <button type="button" onclick="location.href='createPost.php'">Go back</button>
    </article>
  </section><br>

  <section class="blogsection">
    <h2 style="font-family: Tahoma;">Recent blog posts:</h2>
    <article class="blogbox">

    <?php
      session_start();
      $_SESSION["title"] = $_POST["title"];
      $_SESSION["description"] = $_POST["description"];

      echo "<h3><style='font-family: Tahoma; text-align: right; color: white;'>", $_SESSION["title"], "</h3><p><style='color: white; font-family: Tahoma;'>", $_SESSION["description"], "</p><p><br><small style='color:white; font-family:Tahoma;'>Posted: ", date("d/m/y g:i A"), " UTC</small></p><hr>";
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

         echo "<h3 class='blogtext'>", $result["title"], "</h3><p class='blogtext'>", $result["description"], "</p><p class='blogtext'><br><small>Posted: ", date("d/m/y g:i A", strtotime($result["datepost"])), " UTC</small></p><hr>";
        }
     ?>
   </article>
   <footer>
     <small><strong>Copyright &copy Hasibullah Ghulamhaidar 2020</strong></small>
   </footer>
 </section>

 </body>
