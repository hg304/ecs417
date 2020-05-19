<?php
session_start();
?>
<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
</head>

<body>
  <header>
    <h2>My blog</h2>
  </header>

  <nav class="navmenu">
    <ul>
      <li><a href="index.php">About me</a></li>
      <li><a href="skills.php">Skills and achievements</a></li>
      <li><a href="education.php">Education</a></li>
      <li><a href="experience.php">Experience</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href=#>Blog</a></li>
    </ul>
  </nav>

  <br><br><section>
    <form id="enter" name="enter" method="POST" action="addPost.php">
    <fieldset class="blog">
          <input type="text" id="title" placeholder="Title" name="title" <?php echo "value=", $_SESSION["title"]?>><br><br>
          <input type="text" id="description" placeholder="Write anything here" name="description" <?php echo "value=", $_SESSION["description"]?>>
          <br><br><button type="button" name="submit" onclick="checkempty()" value="submit">Submit</button>
          <button type="submit" name="submit" formaction="addPreview.php" value="submit">Preview</button>
          <button type="button" onclick="resetText()" value="reset">Clear</button>
          <script>

              function resetText()
              {
                if (confirm("Do you wish to clear everything that you have written?"))
                {
                  document.getElementById("enter").reset();
                }
              }

              function checkempty()
              {
                var form = document.getElementById("enter");
                var title = document.getElementById("title");
                var desc = document.getElementById("description");

                if (title.value.length > 0 && desc.value.length > 0)
                {
                  form.submit();
                }
                else
                {
                  alert("Both fields have not been filled in");
                  if (title.value.length == 0)
                  {
                    title.style.borderColor = "red";
                  }
                  if (title.value.length > 0)
                  {
                    title.style.borderColor = "white";
                  }
                  if (desc.value.length == 0)
                  {
                    desc.style.borderColor = "red";
                  }
                  if (desc.value.length > 0)
                  {
                    desc.style.borderColor = "white";
                  }
                  e.preventDefault();
                }
              }

          </script>
    </<fieldset>
   </form>
  </section>

    <footer>
      <small><strong>Copyright &copy Hasibullah Ghulamhaidar 2020</strong></small>
    </footer>
</body>