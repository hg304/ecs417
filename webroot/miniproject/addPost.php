<?php

include("config.php");

$title = $_POST["title"];
$description = $_POST["description"];

$sql = "INSERT INTO BLOG (title, description, postdate) VALUES ('$title', '$description', now());";

$res = mysqli_query($conn, $sql);

header("Location:viewBlog.php");


?>
