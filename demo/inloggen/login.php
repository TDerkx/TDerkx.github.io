<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Login</title>
</head>
<body>
<?php
include 'style1.html'
?>

<?php
include("inlog_header.php");
?>
<?php
if(isset($_POST['Gebr_naam']))
{
    //Escape de gebruikersnaam
    $sUser = mysql_real_escape_string($_POST['Gebr_naam']);
    //Maak de hashstring van het wachtwoord
    $sPass = sha1(md5(md5(sha1(md5(sha1(sha1(md5($_POST['Gebr_ww']))))))));
		$sSQL = 'SELECT `Gebr_naam`, `geregistreerd`, `Gebr_ww` FROM `inlog` WHERE `Gebr_naam` = \'' . $sUser .'\'';
    $rsSQL = mysql_query($sSQL);
    $aUser = mysql_fetch_array($rsSQL);
		
		$tlSQL = 'SELECT `Gebr_verhuurder` FROM `gebr_gegevens`';
		$tlsSQL = mysql_query($tlSQL);
		
		  //Er is geen rij gevonden en $aUser is false:
    //Dat betekent dat er geen user is met de opgegeven gebruikersnaam
    if($aUser == false)
    {
        echo '<strong>Deze gebruiker is niet gevonden</strong>';
    }
    //Vergelijk de hashes
    elseif($aUser['Gebr_ww'] != $sPass)
    {
        echo '<strong>Het wachtwoord is fout';
    }
		/*
		//Inloggen gelukt
    elseif ($_SESSION['Gebr_naam'] = $aUser['Gebr_naam'] && $tlsSQL == '1')
    {        
		 header("location: /Casus_vakantiehuisjes_2/demo/inlog_index_b.php");
		}
		elseif ($_SESSION['Gebr_naam'] = $aUser['Gebr_naam'] && $tlsSQL == '0')
		{
		 header("location: /Casus_vakantiehuisjes_2/demo/inlog_index.php");
		}
		else
		{
		echo 'er is iets fout gegaan';
		}
			          
        //Mocht de redirect hierboven niet werken:
        //echo '<strong>Je bent ingelogd, klik <a href="/Casus_vakantiehuisjes_2/demo/inlog_index.php">hier</a> om door te gaan.</strong>';
	 */


    //Inloggen gelukt
    else
    {        
		//De combinatie is goed, maak de sessie aan
        $_SESSION['Gebr_naam'] = $aUser['Gebr_naam'];
				
         
        //Verstuur de gebruiker door
        header("location: /Casus_vakantiehuisjes_2/demo/inlog_index.php");
         
        //Mocht de redirect hierboven niet werken:
        echo '<strong>Je bent ingelogd, klik <a href="/Casus_vakantiehuisjes_2/demo/inlog_index.php">hier</a> om door te gaan.</strong>';
    }
		
}
?>
		
		
<form action="login.php" method="post">
 <table>
  <tr>
   <td><b>Gebruikersnaam:</td></b>
   <td><input type="text" name="Gebr_naam" /></td>
  </tr>
  <tr>
   <td><b>Wachtwoord:</td></b>
   <td><input type="password" name="Gebr_ww" /></tr>
  </tr>
  <tr>
   <td />
   <td><input type="submit" value="Login" />
	 <p>
	 <a href="registreren3.php">&raquo Klik hier om te registreren.</a>
	 <br>
	 <a href="forgot1.php">&raquo Wachtwoord vergeten? Klik hier</a>
	 <br>
	 <a href="../index.php">&raquo Terug naar home</a>
  </tr>
 </table>
</form>
<?php
include("footer.php");
?>

</body>
</html>