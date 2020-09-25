<html>
<head>
<title>6.14. program Cím szerinti paraméterátadás változóra mutató hivatkozás segítségével</title>
</head>
<body>
<?php
$elso = array( "a", "b", "c" );
$masodik = array( 1, 2, 3 );
$harmadik = array_merge( $elso, $masodik );
foreach( $harmadik as $ertek )
{
print "$ertek<br>";
}
?>
</body>
</html>