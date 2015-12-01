<?php
//De gebruiker heeft op de knop gedrukt
ini_set('display_errors',0);
if(isset($_POST['Gebr_naam']))
{
    //In deze array slaan we alle fouten op
    $aError = array();
     
    //Voeg dit toe om MySQL-injecties tegen te gaan.
    $sUser = mysql_real_escape_string($_POST['Gebr_naam']);
   
    //Met deze query kijk je hoeveel rijen er zijn met deze gebruikersnaam
		
    $sSQL = 'SELECT COUNT(*) FROM `inlog`, `gebr_gegevens` WHERE `Gebr_naam` = \'' . $sUser .'\'';
		$rsSQL = mysql_query($sSQL) or die('Er is een MySQL fout opgetreden');
    $iUsers = mysql_result($rsSQL, 0, 0);
     
    if($iUsers > 0)
    {
        $aError[] = 'Deze gebruikersnaam is al in gebruik';
    }
     
    //Controleer of de gebruikersnaam niet te kort is
    if(strlen($_POST['Gebr_naam']) < 4)
    {
        $aError[] = 'Je gebruikersnaam is te kort. Zorg ervoor dat deze minimaal 4 tekens is.';
    }
     
    if(strlen($_POST['Gebr_ww']) < 4)
    {
        $aError[] = 'Je wachtwoord is te kort';
    }
		
		if(strlen($_POST['mail']) < 5)
    {
        $aError[] = 'Het mailadres bevat niet voldoende tekens';
    }
		
		if(strlen($_POST['Gebr_voornaam']) < 1)
    {
        $aError[] = 'Voornaam tekort';
    }
			if(strlen($_POST['Gebr_achternaam']) < 3)
    {
        $aError[] = 'Achternaam te kort';
    }
			if(strlen($_POST['Gebr_stad']) < 3)
    {
        $aError[] = 'Stad te kort';
    }
			if(strlen($_POST['Gebr_postcode']) < 6)
    {
        $aError[] = 'Postcode te kort';
    }
			if(strlen($_POST['Gebr_straat']) < 8)
    {
        $aError[] = 'Straat te kort';
    }
			if(strlen($_POST['Gebr_huisnum']) < 1)
    {
        $aError[] = 'Huisnummer te kort';
    }
			if(strlen($_POST['Gebr_telnum']) < 10)
    {
        $aError[] = 'Telefoonnummer te kort';
    }
			if(strlen($_POST['Gebr_geboortedatum'])< 0)
    {
        $aError[] = 'Geboortedatum te kort';
    }

    //Met deze query kijk je hoeveel rijen er zijn met deze gebruikersnaam
	  //$sSQL = 'SELECT COUNT(*) FROM `inlog` WHERE `mail` = \'' . $eMail .'\'';
    //$rsSQL = mysql_query($sSQL) or die('Er is een MySQL fout opgetreden');
    //$eMail = mysql_result($rsSQL, 0, 0);
    // 
    //if($eMail > 0)
    //{
       //$aError[] = 'Dit mailadres is al bekend in onze database';
    //}
		

    //Als de array leeg is, is alles goed gegaan.
    if(count($aError) == 0)
    {
        //Versleutel het wachtwoord met SHA1, dit geeft een soort code
        //Deze code (een "hash") is niet om te draaien
        //Dus als iemand je database kraakt, zijn de wachtwoorden onleesbaar
    		$sPass = sha1(md5(md5(sha1(md5(sha1(sha1(md5($_POST['Gebr_ww']))))))));
				$eMail = ($_POST['mail']);
        $eReg = ($_POST['geregistreerd']);
				$eVoor = ($_POST['Gebr_voornaam']);
				$eAchter = ($_POST['Gebr_achternaam']);
				$eStad = ($_POST['Gebr_stad']);
				$ePost = ($_POST['Gebr_postcode']);
				$eStr = ($_POST['Gebr_straat']);
				$eHuis = ($_POST['Gebr_huisnum']);
				$eTel = ($_POST['Gebr_telnum']);
				$eDatum = ($_POST['Gebr_geboortedatum']);
         
        //De query die we straks uitvoeren, //$xSQL moet nog!!!
        $sSQL = 'INSERT INTO `inlog` (`Gebr_naam`, `Gebr_ww`, `geregistreerd`, `mail`) VALUES (\'' . $sUser .'\', \'' . $sPass .'\', \'' . $eReg .'\', \'' . $eMail .'\')';
				$ySQL = 'INSERT INTO `gebr_gegevens` (`Gebr_voornaam`, `Gebr_achternaam`, `Gebr_stad`, `Gebr_postcode`, `Gebr_straat`, `Gebr_huisnum`, `Gebr_telnum`, `Gebr_geboortedatum`, `geregistreerd`, `mail`) VALUES (\'' . $eVoor .'\', \'' . $eAchter .'\', \'' . $eStad .'\', \'' . $ePost .'\', \'' . $eStr .'\', \'' . $eHuis .'\', \'' . $eTel .'\', \'' . $eDatum .'\', \'' . $eReg .'\', \'' . $eMail .'\')';
        //De @ voorkomt foutmeldingen
        //Voer de query uit:
        
				@mysql_query($sSQL);
				@mysql_query($ySQL);
        if(!mysql_error())
        {
            echo 'Je bent aangemeld, je kunt nu direct inloggen';
        }
        else
        {
            echo 'Er is een MySQL sSQL fout opgetreden bij het aanmelden.';
        }
    }
    else
    {
        echo 'Er zijn verschillende fouten opgetreden:';
        echo '<ul>';
        foreach($aError as $sError)
        {
            echo '<li>' . $sError .'</li>';
        }
        echo '</ul>';
    }
}
?>
