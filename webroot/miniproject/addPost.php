<?php
  include("config.php");
  session_start();

  if (!isset($_SESSION["title"]))
  {
    $title = $_SESSION["title"];
    $description = $_SESSION["description"];
    $time = $_SESSION["time"];
    $res = mysqli_query($conn, "INSERT INTO BLOG (title, description, datepost) VALUES ('$title', '$description', '$time');");
    if (!$res)
    {
      printf("Error: %s\n", mysqli_error($conn));
      exit();
    }

    header("Location:viewBlog.php");
  }
  else
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
