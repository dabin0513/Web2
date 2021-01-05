<!DOCTYPE html>
<html>
  <body>
    <h1><a href="index.php">WEB</h1>
    <ol>
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=JavaScript">JavaScript</a></li>
      <li><a href="index.php?id=PHP">PHP</a></li>
    </ol>
    <h2>
      <?php
      if(isset($_GET['id'])){
        echo $_GET['id'];
      }
      else{
        echo "Welcome";
      }
       ?>
    </h2>
    <?php
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    }
    else{
      echo "Welcome Web";
    }
     ?>
  </body>
</html>
