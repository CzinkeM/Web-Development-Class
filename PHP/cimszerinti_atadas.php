<html>
<head>
<title>6.14. program Cím szerinti paraméterátadás változóra mutató hivatkozás segítségével</title>
</head>
<body>
<?php
function ottelTobb( $szam )
{
$szam += 5;
}
$regiSzam = 10;
ottelTobb( &$regiSzam );
print( $regiSzam );
?>
</body>
</html>