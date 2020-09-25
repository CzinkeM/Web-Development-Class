<html>
	<head>
		<title>4.2. program Változók érték szerinti hozzárendelése</title>
	</head>
	<body>
	<?php
		$egyikValtozo = 42;
		$masikValtozo = $egyikValtozo;
		// $masikValtozo-ba $egyikValtozo tartalmának másolata kerül
		$egyikValtozo = 325;
		print $masikValtozo; // kiírja, hogy 42
	?>
	</body>
</html>