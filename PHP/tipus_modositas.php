<html>
	<head>
		<title>4.5. program Változó típusának módosítása a settype() függvény segítségével</title>
	</head>
	<body>
	<?php
		$ki_tudja_milyen_tipusu = 3.14;
		print gettype( $ki_tudja_milyen_tipusu ); // double
		print " - $ki_tudja_milyen_tipusu<br>"; // 3.14
		settype( $ki_tudja_milyen_tipusu, "string" );
		print gettype( $ki_tudja_milyen_tipusu ); // string
		print " - $ki_tudja_milyen_tipusu<br>"; // 3.14
		settype( $ki_tudja_milyen_tipusu, "integer" );
		print gettype( $ki_tudja_milyen_tipusu ); // integer
		print " - $ki_tudja_milyen_tipusu<br>"; // 3
		settype( $ki_tudja_milyen_tipusu, "double" );
		print gettype( $ki_tudja_milyen_tipusu ); // double
		print " - $ki_tudja_milyen_tipusu<br>"; // 3.0
		settype( $ki_tudja_milyen_tipusu, "boolean" );
		print gettype( $ki_tudja_milyen_tipusu ); // boolean
		print " - $ki_tudja_milyen_tipusu<br>"; // 1
	?>
	</body>
</html>