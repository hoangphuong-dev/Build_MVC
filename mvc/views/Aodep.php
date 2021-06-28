<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ao dep</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		#header, #foooter{
			background-color: yellow;
		}
		div{
			padding: 20px;
		}
	</style>
</head>
<body>
	<div id="header">
		
	</div>
	<div id="content">
		<?php require_once "mvc/views/pages/".$data["Page"].".php" ?>
	</div>
	<div id="foooter">
	
	</div>
</body>
</html>