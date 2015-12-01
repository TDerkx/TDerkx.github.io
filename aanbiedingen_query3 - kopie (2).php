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
								
								
								print("$hs  , $ht,  $hpe1, $hpr1  , $hpr2 <p>");								
								?>
								
								<?php
                $mysql = mysql_connect("localhost","boesboes","geheim") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
                mysql_select_db("casus_vakantiehuisjes",$mysql) or die("Fout: Het openen van de database is mislukt!");
								
								/*
								//Alles leeg
								 $res0 = mysql_query("SELECT * FROM verhuur",$mysql) or die("De query0 op de database is mislukt!");
                //Huis_stad (rest leeg)
								$res1 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs'",$mysql) or die("De query1 op de database is mislukt!");
								//Huis_type (rest leeg)
								$res2 = mysql_query("SELECT * FROM verhuur WHERE Huis_type = '$ht'",$mysql) or die("De query2 op de database is mislukt!");
								//Huis_pers (rest leeg)
								  $res3 = mysql_query("SELECT * FROM verhuur WHERE Huis_pers <= '$hpe1'",$mysql) or die("De query3 op de database is mislukt!");
								//Huis_prijs (rest leeg)
								$res4 = mysql_query("SELECT * FROM verhuur WHERE Huis_prijs >= '$hpr2' AND Huis_prijs <= '$hpr1'",$mysql) or die("De query4 op de database is mislukt!");
								
								//Huis_stad + prijs (type + pers leeg)
								$res5 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_prijs >= '$hpr2' AND Huis_prijs <= '$hpr1'",$mysql) or die("De query5 op de database is mislukt!");
								//Huis_type + prijs (stad + pers leeg)
								$res6 = mysql_query("SELECT * FROM verhuur WHERE Huis_type = '$ht' AND Huis_prijs >= '$hpr2' AND Huis_prijs <= '$hpr1'",$mysql) or die("De query6 op de database is mislukt!");
								//Huis_stad + pers (type + prijs leeg)
								$res7 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_pers <= '$hpe1'",$mysql) or die("De query7 op de database is mislukt!");
								//Huis_type + pers (stad + prijs leeg)
								$res8 = mysql_query("SELECT * FROM verhuur WHERE Huis_type = '$ht' AND Huis_pers <= '$hpe1'",$mysql) or die("De query8 op de database is mislukt!");
								//Huis_type + Huis_stad (prijs + pers leeg)
								$res9 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_type = '$ht'",$mysql) or die("De query9 op de database is mislukt!");
								
								//Huis_stad + Huis_type + Huis_prijs (pers leeg)
								$res11 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_type = '$ht' AND Huis_prijs >= '$hpr2' AND Huis_prijs <= '$hpr1'",$mysql) or die("De query10 op de database is mislukt!");
								//Huis_type + Huis_type + Huis_pers (prijs leeg)
								$res12 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_type = '$ht' AND Huis_pers <= '$hpe1'",$mysql) or die("De query11 op de database is mislukt!");
								*/
								
								//Huis_pers + Huis_prijs (Huis + stad leeg)
								$res10 = mysql_query("SELECT * FROM verhuur WHERE Huis_pers <= '$hpe1' AND Huis_prijs >= '$hpr2' AND Huis_prijs <= '$hpr1'",$mysql) or die("De query9 op de database is mislukt!");
								//Huis_stad + Huis_pers + Huis_prijs (type leeg)
								$res13 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_prijs >= '$hpr2' AND Huis_prijs <= '$hpr1' AND Huis_pers <= '$hpe1'",$mysql) or die("De query12 op de database is mislukt!");
								//Huis_type + Huis_prijs + Huis_pers (stad leeg)
								$res14 = mysql_query("SELECT * FROM verhuur WHERE Huis_type = '$ht' AND Huis_pers <= '$hpe1' AND Huis_prijs >= '$hpr2' AND Huis_prijs <= '$hpr1'",$mysql) or die("De query13 op de database is mislukt!");
					    	//Huis_stad + Huis_type + Huis_pers + Huis_prijs
								$res15 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_type = '$ht' AND Huis_pers <= '$hpe1' AND Huis_prijs >= '$hpr2' AND Huis_prijs <= '$hpr1'",$mysql) or die("De query14 op de database is mislukt!");
								            
								
								
								
							/*	if ($hs = 'No' AND $ht = 'No2' AND $hpe1 = '' AND $hpr1 = '' AND $hpr2 = '')
								{
								print("$res0");
								}
								elseif ($hs = $_POST["Huis_stad"] AND $ht = 'No2' AND $hpe1 = '' AND $hpr1 = '' AND $hpr2 = '')
								{
								print("$res1");
								}
								elseif ($hs ='No1' AND $ht = $_POST["Huis_type"] AND $hpe1 = '' AND $hpr1 = '' AND $hpr2 = '')
								{
								print("$res2");
								}
								elseif ($hs ='No1' AND $ht = 'No2' AND $hpe1 = $_POST["Huis_pers"] AND $hpr1 = '' AND $hpr2 = '')
								{
								print("$res3");
								}
								elseif ($hs ='No1' AND $ht = 'No2' AND $hpe1 = '' AND $hpr1 = $_POST["Huis_prijs1"] AND $hpr2 = $_POST["Huis_prijs2"])
								{
								print("$res4");
								}
								elseif ($hs = $_POST["Huis_stad"] AND $ht = 'No2' AND $hpe1 = '' AND $hpr1 = $_POST["Huis_prijs1"] AND $hpr2 = $_POST["Huis_prijs2"])
								{
								print("$res5");
								}
								elseif ($hs = 'No1' AND $ht = $_POST["Huis_type"] AND $hpe1 = '' AND $hpr1 = $_POST["Huis_prijs1"] AND $hpr2 = $_POST["Huis_prijs2"])
								{
								print("$res6");
								}
								elseif ($hs = $_POST["Huis_stad"] AND $ht = 'No2' AND $hpe1 = $_POST["Huis_prijs1"] AND $hpr1 = '' AND $hpr2 = '')
								{
								print("$res7");
								}
								elseif ($hs = 'No1' AND $ht = $_POST["Huis_type"] AND $hpe1 = $_POST["Huis_pers"] AND $hpr1 = '' AND $hpr2 = '')
								{
								print("$res8");
								}
								elseif ($hs = $_POST["Huis_stad"] AND $ht = $_POST["Huis_type"] AND $hpe1 = '' AND $hpr1 = '' AND $hpr2 = '')
								{
								print("$res9");
								}
								elseif ($hs = $_POST["Huis_stad"] AND $ht = $_POST["Huis_type"] AND $hpe1 = '' AND $hpr1 = $_POST["Huis_prijs1"] AND $hpr2 = $_POST["Huis_prijs2"])
								{
								print("$res11");
								}
								elseif ($hs = $_POST["Huis_stad"] AND $ht = $_POST["Huis_type"] AND $hpe1 = $_POST["Huis_pers"] AND $hpr1 = '' AND $hpr2 = '')
								{
								print("$res12");
								}								
								*/
								
								if ($hs == 'No1' AND $ht == 'No2' )
								{ print("tot hier 10 <p>");
						//alleen het laten zien nog!
								while(list($nummer,$type,$pers,$gebied,$inhoud,$verhuurder,$prijs,$stad,$postcode,$straat,$huisnum) = mysql_fetch_row($res10))
								  {
 								   print("<p>Dit is het type huis: $type</p><p>Het adres is:</p> <p>$straat, $huisnum </p> <p>$postcode, $stad </p> <p>$gebied </p><p>De beschrijving is: $inhoud</p><p>Prijs: € $prijs</p>");
								  }  
									
								}
								elseif ($hs == $_POST["Huis_stad"] AND $ht == 'No2')
								{print("tot hier 13 <p>");
								print("$res13");
								}
								elseif ($hs == 'No1' AND $ht == $_POST["Huis_type"])
								{print("tot hier 14 <p>");
								print("$res14");
								}
               
							  elseif ($hs == $_POST["Huis_stad"] AND $ht == $_POST["Huis_type"] )
								{print("tot hier 15 <p>");
								print("$res15");
								} 
								else
								{
								print("iets is er gigantisch mislukt");
								}
								mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
								?>

                  
				        
            </div>