<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>XSS</title>
</head>
<body>
<?php $title = (isset($_POST["username"])) ? $_POST["username"] : "ZAP"; ?>
<h1>Hello <?php $title;?></h1>
<form method="post">
  <input type="text" name="username">
  <input type="submit" value="Submit">
</form>
</body>
</html>
