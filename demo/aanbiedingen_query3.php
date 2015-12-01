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
								$hg = $_POST["Huis_Gebied"];
								
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
								$res10 = mysql_query("SELECT * FROM verhuur WHERE Huis_pers <= '$hpe1' AND Huis_prijs >= '$hpr1' AND Huis_prijs <= '$hpr2' AND Huis_Gebied = '$hg'",$mysql) or die("De query9 op de database is mislukt!");
								//Huis_stad + Huis_pers + Huis_prijs (type leeg)
								$res13 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_prijs >= '$hpr1' AND Huis_prijs <= '$hpr2' AND Huis_pers <= '$hpe1' AND Huis_Gebied = '$hg'",$mysql) or die("De query12 op de database is mislukt!");
								//Huis_type + Huis_prijs + Huis_pers (stad leeg)
								$res14 = mysql_query("SELECT * FROM verhuur WHERE Huis_type = '$ht' AND Huis_pers <= '$hpe1' AND Huis_prijs >= '$hpr1' AND Huis_prijs <= '$hpr2' AND Huis_Gebied = '$hg'",$mysql) or die("De query13 op de database is mislukt!");
					    	//Huis_stad + Huis_type + Huis_pers + Huis_prijs
								$res15 = mysql_query("SELECT * FROM verhuur WHERE Huis_stad = '$hs' AND Huis_type = '$ht' AND Huis_pers <= '$hpe1' AND Huis_prijs >= '$hpr1' AND Huis_prijs <= '$hpr2' AND Huis_Gebied = '$hg'",$mysql) or die("De query14 op de database is mislukt!");
																
								if ($hs == 'No1' AND $ht == 'No2' )
									 { 
	 								while(list($Huis_code,$Huis_titel,$Huis_rating,$Huis_type,$Huis_pers,$Huis_Gebied,$Huis_beschrijving,$geregistreerd,$Huis_prijs,$Huis_stad,$Huis_postcode,$Huis_straat,$Huis_huisnum,$Huis_verh_tel,$foto) = mysql_fetch_array($res10))
								  	{

										 print("<tr><td><hr size=10 noshade></td>");
										 if ($Huis_rating == '1')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '2')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '3')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '4')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '5')
										 {
										 print("<img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 print("<td><p><b><h2>|| $Huis_titel</b> || &#8364; $Huis_prijs,-- </h2></p></td>");
										 print("<td><p style='float: right;'><img src='foto/$foto.jpg' width='250' height='200'/></p></td>");
									   print("<td><p>Type verblijf: <u>$Huis_type</u></p></td>");	
										 print("<td><p>$Huis_beschrijving</p></td>");
										 print("<td><p>Het adres is:</p> <p>$Huis_straat $Huis_huisnum </p></td>");	
										 print("<td><p>$Huis_postcode, $Huis_stad </p></td>");	
										 print("<td><p>$Huis_Gebied</p></td>");
										 print("<td><p>Telefoonnummer verhuurder: $Huis_verh_tel</p></td></tr>");
										 	
								  	}  
									 }
								elseif ($hs == $_POST["Huis_stad"] AND $ht == 'No2')
								{while(list($Huis_code,$Huis_titel,$Huis_rating,$Huis_type,$Huis_pers,$Huis_Gebied,$Huis_beschrijving,$geregistreerd,$Huis_prijs,$Huis_stad,$Huis_postcode,$Huis_straat,$Huis_huisnum,$Huis_verh_tel,$foto) = mysql_fetch_array($res13))
								  	{

										 print("<tr><td><hr size=10 noshade></td>");
										 if ($Huis_rating == '1')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '2')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '3')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '4')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '5')
										 {
										 print("<img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 print("<td><p><b><h2>|| $Huis_titel</b> || &#8364; $Huis_prijs,-- </h2></p></td>");
										 print("<td><p style='float: right;'><img src='foto/$foto.jpg' width='250' height='200'/></p></td>");
										 print("<td><p>Type verblijf: <u>$Huis_type</u></p></td>");	
										 print("<td><p>$Huis_beschrijving</p></td>");
										 print("<td><p>Het adres is:</p> <p>$Huis_straat $Huis_huisnum </p></td>");	
										 print("<td><p>$Huis_postcode, $Huis_stad </p></td>");	
										 print("<td><p>$Huis_Gebied</p></td>");	
										 print("<td><p>Telefoonnummer verhuurder: $Huis_verh_tel</p></td></tr>");	
										 	
								  	}
								}
								elseif ($hs == 'No1' AND $ht == $_POST["Huis_type"])
								{while(list($Huis_code,$Huis_titel,$Huis_rating,$Huis_type,$Huis_pers,$Huis_Gebied,$Huis_beschrijving,$geregistreerd,$Huis_prijs,$Huis_stad,$Huis_postcode,$Huis_straat,$Huis_huisnum,$Huis_verh_tel,$foto) = mysql_fetch_array($res14))
								  	{

										 print("<tr><td><hr size=10 noshade></td>");
										 if ($Huis_rating == '1')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '2')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '3')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '4')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '5')
										 {
										 print("<img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 print("<td><p><b><h2>|| $Huis_titel</b> || &#8364; $Huis_prijs,-- </h2></p></td>");
										 print("<td><p style='float: right;'><img src='foto/$foto.jpg' width='250' height='200'/></p></td>");
										 print("<td><p>Type verblijf: <u>$Huis_type</u></p></td>");	
										 print("<td><p>$Huis_beschrijving</p></td>");
										 print("<td><p>Het adres is:</p> <p>$Huis_straat $Huis_huisnum </p></td>");	
										 print("<td><p>$Huis_postcode, $Huis_stad </p></td>");	
										 print("<td><p>$Huis_Gebied</p></td>");
										 print("<td><p><img src='foto/$foto1.jpg' width='190' height='130' alt='' /></p></td>");
										 print("<td><p>Telefoonnummer verhuurder: $Huis_verh_tel</p></td></tr>");
										 	
								  	}
								}
               
							  elseif ($hs == $_POST["Huis_stad"] AND $ht == $_POST["Huis_type"] )
								{while(list($Huis_code,$Huis_titel,$Huis_rating,$Huis_type,$Huis_pers,$Huis_Gebied,$Huis_beschrijving,$geregistreerd,$Huis_prijs,$Huis_stad,$Huis_postcode,$Huis_straat,$Huis_huisnum,$Huis_verh_tel,$foto) = mysql_fetch_array($res15))
								  	{

										 print("<tr><td><hr size=10 noshade></td>");
										 if ($Huis_rating == '1')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '2')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '3')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '4')
										 {
										 print("<img src='ster1.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 elseif ($Huis_rating == '5')
										 {
										 print("<img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'><img src='ster.png' align='right'>");
										 }
										 print("<td><p><b><h2>|| $Huis_titel</b> || &#8364; $Huis_prijs,-- </h2></p></td>");
										 print("<td><p style='float: right;'><img src='foto/$foto.jpg' width='250' height='200'/></p></td>");
										 print("<td><p>Type verblijf: <u>$Huis_type</u></p></td>");	
										 print("<td><p>$Huis_beschrijving</p></td>");
										 print("<td><p>Het adres is:</p> <p>$Huis_straat $Huis_huisnum </p></td>");	
										 print("<td><p>$Huis_postcode, $Huis_stad </p></td>");	
										 print("<td><p>$Huis_Gebied</p></td>");	
									   print("<td><p><img src='foto/$foto1.jpg' width='190' height='130' alt='' /></p></td>");
										 print("<td><p>Telefoonnummer verhuurder: $Huis_verh_tel</p></td></tr>");	
										 	
								  	}
								} 
								else
								{
								print("iets is er gigantisch mislukt");
								}
								mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
								?>

                  
				        
            </div>