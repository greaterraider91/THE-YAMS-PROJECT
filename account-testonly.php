<!DOCTYPE html>
<html>
<head>
  <title>PHP Test</title>
</head>
<body>
  <form action="test_acc.php" method="post">
  <h1>This is a testing page, not all features are implemented, and there might be bugs.</h1>
  <input type=text name="name">
  <input type=password name="pass">
  <input type=submit value="Comment!" style="border: none; box-shadow: 5px 10px;">
  <p hidden>Comment successful!</p>
  <input type=text value="Commented on this post!" name="commmessage" hidden>
  <input type=submit value="Like!" style="border: none; box-shadow: 5px 10px;">
  </form>

</body>
</html>
<?php
 
?>
