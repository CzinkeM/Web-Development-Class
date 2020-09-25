<html>
<head>
		<title>6.11. program Függvény elhagyható paraméterrel </title>
</head>
<body>
<?php
function meretez( $szoveg, $meret = 3)
{
print "<font size=\"$meret\„ face=\"Helvetica,Arial,Sans-Serif\"> $szoveg</font>";
}
meretez("Egy címsor<br>",5);
meretez("szöveg<br>");
meretez("újabb szöveg<BR>");
meretez("még több szöveg<BR>");
?>
</body>
</html>