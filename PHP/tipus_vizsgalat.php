<html>
	<head>
		<title>4.4. program Változó típusának vizsgálata</title>
	</head>
	<body>
	<?php
		$proba = 5;
		print gettype( $proba ); // integer
		print "<br>"; // új sor, hogy ne follyanak össze a típusnevek
		$proba = "öt";
		print gettype( $proba ); // string
		print "<br>";
		$proba = 5.0;
		print gettype( $proba ); // double
		print "<br>";
		$proba = true;
		print gettype( $proba ); // boolean
		print "<br>";
	?>
	</body>
</html