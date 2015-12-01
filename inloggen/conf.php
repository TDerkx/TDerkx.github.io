<?php 
$mysql = mysql_connect("localhost","boesboes","geheim") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
mysql_select_db("casus_vakantiehuisjes",$mysql) or die("Fout: Het openen van de database is mislukt!");
?>
