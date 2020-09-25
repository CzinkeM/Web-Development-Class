<html>
<head>
<title>6.4. program Visszatérési értékkel rendelkező függvény</title>
</head>
<body>
<?php
function osszead( $elsoszam, $masodikszam )
{
$eredmeny = $elsoszam + $masodikszam;
return $eredmeny;
}
print osszead(3,5); // kiírja, hogy "8„
?>
</body>
</html>