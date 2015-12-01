				 <div id="main">

                <h1>
								Hier de resultaten naar uw keuze:</h1>
				
                <p>
								
								<?php
								$hs = $_POST["Huis_stad"];
								$ht = $_POST["Huis_type"];
								$hpe1 = $_POST["Huis_pers"]; 
								$hpr1 = $_POST["Huis_prijs1"];
								$hpr2 = $_POST["Huis_prijs2"];
								print("$_SESSION["Huis_Gebied"]");
								if ($hpe1 == '')
								{
								$hpe1 = '99';
								}
								if ($hpr1 == '')
								{
								$hpr1 = '0000';
								}
								if ($hpr2 == '')
								{
								$hpr2 = '9999';
								}
								
								
							
								$mysql = mysql_connect("localhost","boesboes","geheim") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
                mysql_select_db("casus_vakantiehuisjes",$mysql) or die("Fout: Het openen van de database is mislukt!");
													
								//Huis_pers + Huis_prijs (Huis + stad leeg)
								$res10 = mysql_query("SELECT * FROM verhuur WHERE Huis_pers <= '20' AND Huis_prijs >= '$hpr1' AND Huis_prijs <= '$hpr2'",$mysql) or die("De query9 op de database is mislukt!");
								//Huis_stad + Huis_pers + Huis_prijs (type leeg)
								$res13 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_prijs >= '$hpr1' AND Huis_prijs <= '$hpr2' AND Huis_pers <= '$hpe1'",$mysql) or die("De query12 op de database is mislukt!");
								//Huis_type + Huis_prijs + Huis_pers (stad leeg)
								$res14 = mysql_query("SELECT * FROM verhuur WHERE Huis_type = '$ht' AND Huis_pers <= '$hpe1' AND Huis_prijs >= '$hpr1' AND Huis_prijs <= '$hpr2'",$mysql) or die("De query13 op de database is mislukt!");
					    	//Huis_stad + Huis_type + Huis_pers + Huis_prijs
								$res15 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_type = '$ht' AND Huis_pers <= '$hpe1' AND Huis_prijs >= '$hpr1' AND Huis_prijs <= '$hpr2'",$mysql) or die("De query14 op de database is mislukt!");
																
								if ($hs == 'No1' AND $ht == 'No2' )
									 { 
	// derde test	
	 print("net voor printen van 10 <p>");
// alleen het laten zien (hiertussen) nog!
										while(list($Huis_code,$Huis_titel,$Huis_rating,$Huis_type,$Huis_pers,$Huis_Gebied,$Huis_beschrijving,$geregistreerd,$Huis_prijs,$Huis_stad,$Huis_postcode,$Huis_straat,$Huis_huisnum) = mysql_fetch_array($res10))
								  	{
 								   	 print("<p>Dit is het huis: $Huis_titel     Rating: $Huis_rating /5</p><p>De beschrijving is: $Huis_beschrijving</p><p>Prijs: &#8364; $Huis_prijs</p><p>Dit is het type huis: $Huis_type</p><p>Het adres is:</p> <p>$Huis_straat, $Huis_huisnum </p> <p>$Huis_postcode, $Huis_stad </p> <p>$Huis_Gebied </p>");
								  	 }  
			//als dit (hiertussen) werkt is er geen probleem meer	!
									 }
								elseif ($hs == $_POST["Huis_stad"] AND $ht == 'No2')
								{print("net voor printen van 13 <p>");
								print("$res13");
								}
								elseif ($hs == 'No1' AND $ht == $_POST["Huis_type"])
								{print("net voor printen van 14 <p>");
								print("$res14");
								}
               
							  elseif ($hs == $_POST["Huis_stad"] AND $ht == $_POST["Huis_type"] )
								{print("net voor printen van 15 <p>");
								print("$res15");
								} 
								else
								{
								print("iets is er gigantisch mislukt");
								}
								mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
								?>

                  
				        
            </div>