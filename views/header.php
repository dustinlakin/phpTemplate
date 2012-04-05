<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<?php for($i = 0; $i < sizeof($config->styles); $i++):?>
		<link href="<?=$config->cssPath . $config->styles[$i]?>" rel="stylesheet" type="text/css"/>
		<?php endfor;?>
	</head>
	<body>