<?php

  session_start();
  include("config.php");

  $title = $_POST["title"];
  $description = $_POST["description"];

  $_SESSION["title"] = $title;
  $_SESSION["description"] = $description;

  $res = mysqli_query($conn, "INSERT INTO BLOG (title, description, datepost) VALUES ('$title', '$description', now());");
  if (!$res)
  {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
  }

  header("Location:preview.php");
?>
