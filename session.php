<?php
// We werken ook hier met sessies
session_start();
// Controleren of de bezoeker ingelogd is
if(!isset($_SESSION['Gebr_naam']) || $_SESSION['Gebr_naam'] == false)
{
 		print ('U bent niet ingelogd!');
    header('Location: error.php');
    exit();
}
?> 