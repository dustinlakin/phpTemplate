<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<?for($i = 0; $i < sizeof($config->styles); $i++):?>
		<link href="<?=$config->cssPath . $config->styles[$i]?>" rel="stylesheet" type="text/css"/>
		<?endfor;?>
	</head>
	<body>