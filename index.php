<!DOCUTYPE html>
<html>
<head>
<title>Work Cat - Short Sea Shipping Services</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style/first.css">
<link rel="icon" type="image/ico" href="img/favicon.ico" />
</head>
<body>
<div class="header"> 
<?php include 'pages/en/header.php'; ?>
</div>
<div class="navigacija">
<?php include 'pages/en/nav.php'; ?>
</div>
<div class="content">
<?php
	$directory = 'pages/en';
	$whitelist = array_map(function ($file) use ($directory) {
	return "$directory/$file";
	}, array_diff(scandir($directory), array('..', '.')));
	if(!isset($_GET['page'])) {
	$page = "pages/en/landing";
	} else {
	$page = $_GET['page'];
	}
	$file = $page.".php";
	if(in_array($file, $whitelist) && file_exists($file)){
	include($file);
	} else {
	echo "<pre>Page you are looking for does not exist! Check the link and report it to us. All the best</pre>";
	}
?>
</div>
<div class="footer">
<?php include 'pages/en/footer.php'; ?>
</div>
</body>
</html>
