<html>
<head>
	<title>6.11. program Két paramétert igénylő függvény</title>
</head>
<body>
<?php
function meretez( $szoveg, $meret )
{
print "<font size=\"$meret\„ face=\"Helvetica,Arial,Sans-Serif\"> $szoveg</font>";
}
meretez("Egy címsor<br>",5);
meretez("szöveg<br>",3);
meretez("újabb szöveg<BR>",9);
meretez("még több szöveg<BR>",2);
?>
</body>
</html>