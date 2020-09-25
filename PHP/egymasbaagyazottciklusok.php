<html>
<head>
	<title>5.12. program Két for ciklus egymásba ágyazása</title>
</head>
<body>
<?php
print "<table border=1>\n"; // HTML táblázat kezdete
for ( $y=1; $y<=12; $y++ )
{
print "<tr>\n"; // sor kezdete a HTML táblázatban
for ( $x=1; $x<=12; $x++ )
{
print "\t<td>"; // cella kezdete
print ($x*$y);
print "</td>\n"; // cella vége
}
print "</tr>\n"; // sor vége
}
print "</table>\n"; // táblázat vége
?>
</body>
</html>