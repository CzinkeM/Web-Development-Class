<html>
	<head>
		<title>4.3. program Változóra mutató hivatkozás</title>
	</head>
	<body>
	<?php
		$egyikValtozo = 42;
		$masikValtozo = &$egyikValtozo;
		// $masikValtozo-ba $egyikValtozo-ra mutató hivatkozás kerül
		$egyikValtozo = 325;
		print $masikValtozo; // kiírja, hogy 325
	?>
	</body>
</html>