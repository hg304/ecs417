<?php

include("config.php");


$sql = "INSERT INTO BLOG (title, description, postdate) VALUES ('$_POST['title']', '$_POST['description']', now());";

$res = mysqli_query($conn, $sql);

header("Location:viewBlog.php");


?>
