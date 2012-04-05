		</div>
		<?php
		include $config->documentRoot . "js/dynamic.php";

		//if custom $scripts were not set, use the defaults
		if(!isset($scripts)):
			$scripts = $config->scripts;
		endif;

		for($i = 0, $len = sizeof($scripts); $i < $len; $i++):
			//external or use jsPath
			$path = (strpos($scripts[$i], "http") === FALSE ? $config->jsPath : "");
		?>
		<script src="<?=$path . $scripts[$i]?>" type="text/javascript"></script>
		<?php
		endfor;
		?>
	</body>
</html>
