<html>
<head>
	<title>5.11. program A continue utasítás használata</title>
</head>
<body>
<?php
$szamlalo = -4;
for ( ; $szamlalo <= 10; $szamlalo++ )
{
if ( $szamlalo == 0 )
continue;
$seged = 4000/$szamlalo;
print "4000 $szamlalo részre osztva $seged.<br>";
}
?>
</body>
</html>