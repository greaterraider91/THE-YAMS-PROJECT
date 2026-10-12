<!DOCTYPE html>
<html>
<head>
  <title>PHP Test</title>
</head>
<body>
  <img src="https://files.catbox.moe/p2efx5.jpeg" height="400">
  <form action="test.php" method="get">
  <h1>This is a testing page, not all features are implemented, please enter any name into the box below, with your comment, typed into the second box.</h1>
  <input type=text name="username">
  <input type=text name="comment">
  <input type=submit value="Comment!">
  <p hidden>Comment successful!</p>
  </form>
</body>
</html>
<?php
  echo $_GET["username"] ["comment"]
?>
