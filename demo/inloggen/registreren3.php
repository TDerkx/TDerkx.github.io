<?php include("inlog_header.php"); ?>
<?php include 'style2.html' ?>
<?php include ("registreren_query3.php");?>


<form action="registreren3.php" method="post">
 <table>
 <tr>
   <td><b>Voer hier uw voornaam in:</td></b>
   <td><input type="text" name="Gebr_voornaam" /></td>
  </tr>
	<tr>
   <td><b>Voer hier uw (gehele) achternaam in:</td></b>
   <td><input type="text" name="Gebr_achternaam" /></td>
  </tr>
	<tr>
   <td><b>Voer hier uw woonplaats in:</td></b>
   <td><input type="text" name="Gebr_stad" /></td>
  </tr>
	<tr>
   <td><b>Voer hier uw postcode in:</td></b>
   <td><input type="varchar" size="7" name="Gebr_postcode" /></td>
  </tr>
	<tr>
   <td><b>Voer hier uw straatnaam in:</td></b>
   <td><input type="text" name="Gebr_straat" /></td>
  </tr>
  <tr>
		<tr>
   <td><b>Voer hier uw huisnummer in:</td></b>
   <td><input type="int" size="3" name="Gebr_huisnum" /></td>
  </tr>
  <tr>
		<tr>
   <td><b>Voer hier uw telefoonnummer in:</td></b>
   <td><input type="text" name="Gebr_telnum" /></td>
  </tr>
			<tr>
   <td><b>Voer hier uw geboortedatum in:</td></b>
   <td><input type="date" name="Gebr_geboortedatum" /></td>
  </tr>
	  <tr>
   <td><b>Voer hier uw gebruikersnaam in:</td></b>
   <td><input type="text" name="Gebr_naam" /></td>
  </tr>
  <tr>
   <td><b>Voer hier uw wachtwoord in:</td></b>
   <td><input type="password" name="Gebr_ww" /></tr>
  </tr>
	 <td><b>Voer hier uw e-mailadres in:</td></b>
   <td><input type="text" name="mail" /></tr>
  </tr>
	
  <tr>
   <td />
   <td><input type="submit" name="Verzenden" />
	 <p>
	 </tr>
	</tr>
  <td><a href="login.php"><b>&raquo Ga terug om in te loggen.</b></a></td>
 </table>
 </form>
<?php include("footer.php"); ?>