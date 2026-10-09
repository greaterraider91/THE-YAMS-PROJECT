<!DOCTYPE html>
<html>
<head>
  <title>PHP Test</title>
</head>
<body>
  <form action="test.php" method="get">
  <input type=text value="Comment!" name="comment">
  </form>
</body>
</html>
<?php
  echo $_GET["comment"]
?>
