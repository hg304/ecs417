<?php
  include("config.php");

  $res = mysqli_query($conn, "SELECT * FROM BLOG;");
  if (!$res)
   {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
   }

   $position = mysqli_num_rows($res);

  $result = mysqli_query($conn, "DELETE FROM BLOG WHERE id = '$position';");
  if (!$result)
   {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
   }

   $decrement = mysqli_query($conn, "UPDATE BLOG SET id = id - 1 WHERE id > 0");
   if (!$decrement)
    {
     printf("Error: %s\n", mysqli_error($conn));
     exit();
    }

  header("Location:createPost.php");


?>
