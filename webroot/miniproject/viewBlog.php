<html>
<head>
  <title>My blog</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
</head>

<body>
  <header>
    <h2>My blog</h2>
  </header>

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
      <button type="button" onclick="location.href='createPost.php'">Add post</button>
    </article>
    <article class="search">
      <form id="monthpick" method="POST" action="viewBlog.php">
        <label for="months">Select month</label>
        <select name="months" id="months">
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
        <button type="submit" value="submit">Search</button>
      </form>
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

      if ($_POST["months"] == null)
      {
         for ($i = $rows; $i > 0; $i--)
         {
           $res2 = mysqli_query($conn, "SELECT * FROM BLOG WHERE id = '$i';");
           if (!$res2)
            {
             printf("Error: %s\n", mysqli_error($conn));
             exit();
            }

           $result = mysqli_fetch_array($res2);

           echo "<h3><style='font-family: Tahoma; text-align: center; color: white;'>", $result["title"], "</h3><p><style='color: white; font-family: Tahoma;'>", $result[description], "</p><p><br><small style='color:white; font-family:Tahoma;'>Posted: ", date("d/m/y g:i A", strtotime($result["datepost"])), "</small></p><hr>";
         }
       }
       else
       {
          for ($i = $rows; $i > 0; $i--)
          {
            $res2 = mysqli_query($conn, "SELECT * FROM BLOG WHERE id = '$i' AND MONTH(postdate) = '$_POST['months']';");
            if (!$res2)
             {
              printf("Error: %s\n", mysqli_error($conn));
              exit();
             }

            $result = mysqli_fetch_array($res2);

            echo "<h3><style='font-family: Tahoma; text-align: center; color: white;'>", $result["title"], "</h3><p><style='color: white; font-family: Tahoma;'>", $result[description], "</p><p><br><small style='color:white; font-family:Tahoma;'>Posted: ", date("d/m/y g:i A", strtotime($result["datepost"])), "</small></p><hr>";
          }
       }
     ?>
   </article>
   <footer>
     <small><strong>Copyright &copy Hasibullah Ghulamhaidar 2020</strong></small>
   </footer>
 </section>

 </body>
