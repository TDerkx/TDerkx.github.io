<?php
$aUser = mysql_real_escape_string($_SESSION['Gebr_naam']);

$mysql = mysql_connect("localhost","boesboes","geheim") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
mysql_select_db("casus_vakantiehuisjes",$mysql) or die("Fout: Het openen van de database is mislukt!");

$resultaat1 = mysql_query('SELECT gg.Gebr_voornaam,gg.Gebr_achternaam,gg.Gebr_stad,gg.Gebr_straat,gg.Gebr_huisnum,gg.Gebr_postcode,gg.Gebr_telnum,gg.Gebr_geboortedatum,gg.mail FROM gebr_gegevens as gg, inlog as inl WHERE gg.geregistreerd = inl.geregistreerd AND Gebr_naam = \'' . $aUser .'\'',$mysql) or die("De query1 op de database is mislukt!");
mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");

while(list($Gebr_voornaam, $Gebr_achternaam, $Gebr_stad, $Gebr_straat, $Gebr_huisnum, $Gebr_postcode, $Gebr_telnum, $Gebr_geboortedatum, $mail) = mysql_fetch_row($resultaat1))
{
 print("<tr><td><p><b>Naam</b>: $Gebr_voornaam $Gebr_achternaam </td><td><p><b>Adres:</b> $Gebr_straat $Gebr_huisnum; $Gebr_postcode $Gebr_stad</p><p><b>Telefoonnummer:</b> $Gebr_telnum</p><p><b>Mailadres:</b> $mail</p><p><b>Geboortedatum:</b> $Gebr_geboortedatum</p></td></tr>");
} 

?>
