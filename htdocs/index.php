<!DOCTYPE html>
<html>
  <body>
    <h1>WEB</h1>
    <ol>
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
      <?php
      echo $_GET['id'];
       ?>
    </h2>
    HTML, CSS, JavaScript
  </body>
</html>
