<!DOCTYPE html>
<html>
<head>
  <title>PHP Test</title>
</head>
<body>
  <img src="https://files.catbox.moe/p2efx5.jpeg" height="400">
  <form action="test.php" method="get">
  <input type=text name="comment">
  <input type=submit value="Comment!">
  <p hidden>Comment successful!</p>
  </form>
</body>
</html>
<?php
  echo $_GET["comment"]
?>
