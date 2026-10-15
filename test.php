<!DOCTYPE html>
<html>
<head>
  <title>PHP Test</title>
</head>
<body>
  <img src="https://files.catbox.moe/p2efx5.jpeg" height="400">
  <form action="likemessage.php" method="get">
  <h1>This is a testing page, not all features are implemented, and there might be bugs.</h1>
  <input type=submit value="Like!" style="border: none; box-shadow: 5px 10px;">
  </form>
  <form action="test.php" method="get">
  <input type=text name="comment">
  <input type=submit value="Comment!" style="border: none; box-shadow: 5px 10px;">
  <p hidden>Comment successful!</p>
  </form>
</body>
</html>
<?php
  echo $_GET["comment"]
?>
