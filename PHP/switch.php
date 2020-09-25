<html>
	<head>
		<title>5.2. program Az else ággal kiegészített if utasítás</title>
	</head>
	<body>
	<?php
        $hetnapja = "Kedd";

		switch($hetnapja)
        {
        case "Péntek":
            print "Kikapcsolni a vekkert, holnap nem kell dolgozni!<br>";
        case "Hétfõ":
        case "Szerda":
            print "Ma délelõtt dolgozom<br>";
            break;
        case "Kedd":
        case "Csütörtök":
            print "Ma délután dolgozom<br>";
            break;
        case "Vasárnap":
            print "Bekapcsolni a vekkert!<br>";
        case "Szombat":
            print "Hurrá, szabadnap!<br>";
        break;
        default:
        print "Azt hiszem ideje lenne egy új programoz ót és/vagy egy jobb naptárat keríteni<br>";
        break;
        }
	?>
	</body>
</html>