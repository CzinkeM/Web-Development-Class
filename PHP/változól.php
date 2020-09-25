<html>
	<head>
		<title>4.1. program Dinamikusan beállított és elért változók</title>
	</head>
	<body>
	<?php
		$tarolo = "felhasznalo";
		$$tarolo = "Anna";
		// lehetne egyszerűen csak:
		// $felhasznalo = "Anna";
		// vagy
		// ${"felhasznalo"} = "Anna"
		// persze ekkor nem kellenek dinamikus változók
		print "$felhasznalo<br>";
		print $$tarolo;
		print "<br>";
		print "${$tarolo}<br>";
		print "${'felhasznalo'}<br>";
	?>
	</body>
</html>