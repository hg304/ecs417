<?php

include("config.php");

$title = $_POST["title"];
$description = $_POST["description"];

$res = mysqli_query($conn, "INSERT INTO BLOG (title, description, datepost) VALUES ('$title', '$description', now());");
if (!$res)
 {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
 }

header("Location:viewBlog.php");

?>
