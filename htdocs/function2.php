<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic(){
          print("function<br>");
          print("basic");
      }
        basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
      function sum($i, $j){
        print($i + $j);
        print("<br>");
      }
      sum(2, 4);
      sum(3, 3);
    ?>
    <h2>return</h2>
    <?php
      function sum2($i, $j){
        return $i + $j;
      }
      print(sum2(2,4));
      file_put_contents('result.txt', sum2(2,4));
    ?>
  </body>
</html>
