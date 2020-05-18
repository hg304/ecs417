<?php

include("config.php");

if (isset($_POST["submit"]))
{
  $title = $_POST["title"];
  $description = $_POST["description"];

  $res = mysqli_query($conn, "INSERT INTO BLOG (title, description, datepost) values ('$title', '$description', now());");

  header("Location:viewBlog.php");
}

?>
