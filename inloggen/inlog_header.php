<?php session_start(); ?>

<?php
//MySQL connectie
include("conf.php");
//Login test
if(isset($_SESSION['Gebr_naam']))
{
    //Maak de user-array aan
    $sSQL = 'SELECT * FROM `inlog` WHERE `geregistreerd` = \'' . (int)$_SESSION['Gebr_naam'] .'\'';
    $rsSQL = mysql_query($sSQL);
    $aUser = mysql_fetch_assoc($rsSQL);
     
    //Kijk of de gebruiker wel bestaat
    if($aUser == false)
    {
        $bLogin = false;
         
        //Deze sessie klopt niet, dus gooien we hem weg
        session_destroy();
    }
		
}
else
{
    $bLogin = false;
}
?>
