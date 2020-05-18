<?php

include("config.php");

if (isset($_POST["enter"]))
{
  $title = $_POST["title"];
  $description = $_POST["description"];

  $res = mysqli_query($conn, "INSERT INTO BLOG (title, description, datepost) VALUES ('$title', '$description', now());");
  if (!$res)
   {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
   }

  header("Location:viewBlog.php");
}

?>
