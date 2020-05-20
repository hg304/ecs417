<?php
  include("config.php");
  session_start();

  $title = $_SESSION["title"];
  $description = $_SESSION["description"];

  $res = mysqli_query($conn, "DELETE * FROM BLOG WHERE description = '$description';");
  if (!$res)
   {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
   }

  header("Location:createPost.php");


?>
