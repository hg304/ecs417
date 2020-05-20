<?php
  include("config.php");

  $res = mysqli_query($conn, "SELECT * FROM BLOG;");
  if (!$res)
   {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
   }

   $position = mysqli_num_rows($res);

  $res = mysqli_query($conn, "DELETE * FROM BLOG WHERE id = '$position';");
  if (!$res)
   {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
   }

  header("Location:createPost.php");


?>
