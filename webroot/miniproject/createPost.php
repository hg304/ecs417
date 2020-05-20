<?php
session_start();
?>
<html>
<head>
  <title>Make a post</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
</head>

<body>
  <header>
    <h2>My blog</h2>
  </header>

  <nav class="navmenu">
    <ul>
      <li><a href="index.php">About me</a></li>
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
          <textarea id="description" name="description" placeholder="Write anything here" <?php echo "value=", $_SESSION["description"]?>></textarea>
          <br><br><button type="submit" id="submit" name="submit" value="submit">Submit</button>
          <button type="submit" id="preview" name="preview" formaction="preview.php" value="submit">Preview</button>
          <button type="button" onclick="resetText()" value="reset">Clear</button>
          <script>

              function resetText()
              {
                if (confirm("Do you wish to clear everything that you have written?"))
                {
                  document.getElementById("enter").reset();
                }
              }

                var title = document.getElementById("title");
                var desc = document.getElementById("description");
                var subbutton = document.getElementById("submit");
                var prevbutton = document.getElementById("preview");

                subbutton.addEventListener("click", function(e){
                  if (title.value.length > 0)
                  {
                    title.style.borderColor = "white";
                  }
                  else
                  {
                    alert("Both fields have not been filled in");
                    title.style.borderColor = "red";
                    e.preventDefault();
                  }
                  if (desc.value.length > 0)
                  {
                    desc.style.borderColor = "white";
                  }
                  else
                  {
                    alert("Both fields have not been filled in");
                    desc.style.borderColor = "red";
                    e.preventDefault();
                  }
                }, false);

                prevbutton.addEventListener("click", function(e){
                  if (title.value.length > 0)
                  {
                    title.style.borderColor = "white";
                  }
                  else
                  {
                    alert("Both fields have not been filled in");
                    title.style.borderColor = "red";
                    e.preventDefault();
                  }
                  if (desc.value.length > 0)
                  {
                    desc.style.borderColor = "white";
                  }
                  else
                  {
                    alert("Both fields have not been filled in");
                    desc.style.borderColor = "red";
                    e.preventDefault();
                  }
                }, false);

          </script>
    </<fieldset>
   </form>
  </section>

    <footer>
      <small><strong>Copyright &copy Hasibullah Ghulamhaidar 2020</strong></small>
    </footer>
</body>
