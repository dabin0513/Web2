<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $number = array('1', '2', '3', '4');
    echo $number[0].'<br>';
    echo $number[1].'<br>';
    echo count($number).'<br>';
    var_dump(count($number));
    array_push($number, "232", "223232");
    var_dump($number);
    ?>
  </body>
</html>
