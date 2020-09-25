<html>
<head>
<title>6.13. program Függvényparaméter érték szerinti átadása</title>
</head>
<body>
<?php
function ottelTobb( $szam )
{
$szam += 5;
}
$regiSzam = 10;
ottelTobb( $regiSzam );
print( $regiSzam );
?>
</body>
</html>