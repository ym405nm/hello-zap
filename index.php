<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ZAP Practice</title>
</head>
<body>
<?php $title = (isset($_GET["username"])) ? $_GET["username"] : "ZAP"; ?>
<h1>Hello <?php echo htmlspecialchars($title, ENT_QUOTES, "utf-8");?></h1>
</body>
</html>
