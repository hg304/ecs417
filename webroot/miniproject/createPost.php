
<html>
<head>
  <title>Make a post</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
</head>

<body onload="restoretext()">
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
          <input type="text" id="title" placeholder="Title" name="title"><br><br>
          <textarea id="description" name="description" placeholder="Write anything here"></textarea>
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
                  if (title.value.length == 0 || desc.value.length == 0)
                  {
                    alert("Both fields have not been filled in");
                    if (title.value.length == 0)
                    {
                      title.style.borderColor = "red";
                    }
                    if (desc.value.length == 0)
                    {
                      desc.style.borderColor = "red";
                    }
                    if (title.value.length > 0)
                    {
                      title.style.borderColor = "white";
                    }
                    if (desc.value.length > 0)
                    {
                      desc.style.borderColor = "white";
                    }
                    e.preventDefault();
                  }
                }, false);

                prevbutton.addEventListener("click", function(e){
                  if (title.value.length == 0 || desc.value.length == 0)
                  {
                    alert("Both fields have not been filled in");
                    if (title.value.length == 0)
                    {
                      title.style.borderColor = "red";
                    }
                    if (desc.value.length == 0)
                    {
                      desc.style.borderColor = "red";
                    }
                    if (title.value.length > 0)
                    {
                      title.style.borderColor = "white";
                    }
                    if (desc.value.length > 0)
                    {
                      desc.style.borderColor = "white";
                    }
                    e.preventDefault();
                  }
                }, false);

                function restoretext()
                {
                  <?php
                  session_start();
                   ?>

                  var title_val = <?php echo json_encode($_SESSION["title"], JSON_HEX_TAG);?>;
                  var desc_val = <?php echo json_encode($_SESSION["description"], JSON_HEX_TAG);?>;
                  title.value = title_val;
                  if (desc_val == null)
                  {
                    desc.value = "";
                  }
                  else
                  {
                    desc.value = desc_val;
                  }


                  <?php
                    unset($_SESSION["title"]);
                    unset($_SESSION["description"]);
                  ?>
                }

          </script>
    </<fieldset>
   </form>
  </section>

    <footer>
      <small><strong>Copyright &copy Hasibullah Ghulamhaidar 2020</strong></small>
    </footer>
</body>
