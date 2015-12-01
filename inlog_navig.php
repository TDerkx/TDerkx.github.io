<?php include 'session.php'; 
$gn = $_SESSION['Gebr_naam'];
$mysql = mysql_connect("localhost","boesboes","geheim") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
mysql_select_db("casus_vakantiehuisjes",$mysql) or die("Fout: Het openen van de database is mislukt!");
$res1 = mysql_query("SELECT Gebr_beheerder FROM gebr_gegevens WHERE Gebr_naam = '$gn' ",$mysql) or die("De query9 op de database is mislukt!");
mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
?>
        <div id="left">

            <div id="nav">
            
                <h3>Menu</h3>

                <div class="inner_box">

                    <ul>
                        <li><a href="inlog_index.php">Home</a></li>
                        <li><a href="inlog_aanbiedingen.php">Aanbiedingen</a></li>
												<li><a href="inlog_pers.php">Persoonlijke informatie</a>

<?php  //checkt of je een beheerder bent. weet niet zeker of het werkt
if($res1== '1') {  ?><li><a href="inlog_aanpas.php">Aanbiedingen aanpassen</a><?php }
  ?>                       
											  <li><a href="inlog_contact.php">Contact</a></li>
                        <li><a href="inlog_over_ons.php">Over ons</a></li>
												<li><b><a href="inloggen/logout.php">Uitloggen</a></li></b>
                    </ul>                
                </div>
                                             
            </div>