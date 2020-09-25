<html>
<head>
<title>7.1. program Többdimenziós tömb létrehozása</title>
</head>
<body>
<?php
$karakter = array
(
array (
"nev" => "János",
"tevekenyseg" => "szuperhős",
"eletkor" => 30,
"kulonleges kepesseg" => "röntgenszem"
),
array (
"nev" => "Szilvia",
"tevekenyseg" => "szuperhős",
"eletkor" => 24,
"kulonleges kepesseg" => "nagyon erős"
),
array (
"nev" => "Mari",
"tevekenyseg" => "főgonosz",
"eletkor" => 63,
"kulonleges kepesseg" =>
"nanotechnológia"
)
    );
    print $karakter[2]["tevekenyseg"]; //kiírja, hogy szuperhős
    ?>
    </body>
    </html>