				 <div id="main">

                <h1>
								Zoek hier de aanbiedingen naar uw voorkeur:</h1>
				
                <p>
                <?php 
								$hg = $_POST["Huis_Gebied"];
								$mysql = mysql_connect("localhost","boesboes","geheim") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
                mysql_select_db("casus_vakantiehuisjes",$mysql) or die("Fout: Het openen van de database is mislukt!");
                $resultaat1 = mysql_query("SELECT DISTINCT Huis_stad FROM verhuur WHERE Huis_gebied = '$hg'",$mysql) or die("De query1 op de database is mislukt!");
                $resultaat3 = mysql_query("SELECT DISTINCT Huis_type FROM verhuur",$mysql) or die("De query3 op de database is mislukt!");
                mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
                ?>
								

                  <form id="Zoeken" action="aanbiedingen3.php" method="post">
									<p> 
									Dit is uw gebied:
                  <select name="Huis_Gebied">
                  <?php
									print("<option value='$hg'>$hg</option>");
                  ?>

                  </select>

									
									<p> 
									Kies uw stad:
                  <select name="Huis_stad">
                  <?php
									print("<option value='No1'>Geen voorkeur</option>");
                  while(list($Huis_stad) = mysql_fetch_row($resultaat1))
                  {
                  print("<option value='$Huis_stad'>$Huis_stad</option>");
                  }
                  ?>

                  </select>
									<p>
									Kies uw type huisje:
                  <select name="Huis_type">
                  <?php
									print("<option value='No2'>Geen voorkeur</option>");
                  while(list($Huis_type) = mysql_fetch_row($resultaat3))
                  {
                  print("<option value='$Huis_type'>$Huis_type</option>");
                  }
                  ?> 
									
									</select>
									<p>
									Kies het aantal personen &raquo maximaal:
									<input type="int" id="text1" name="Huis_pers" maxlength="2" size="5" style="background-color: #E9E9E9;"/>
		
									<p>
									Kies het bedrag &raquo minimaal : &#8364;
									<input type="int" id="text2" name="Huis_prijs1" maxlength="4" size="5" style="background-color: #E9E9E9;"/><br>
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&raquo; maximaal :	&#8364;
									<input type="int" id="text3" name="Huis_prijs2" maxlength="4" size="5" style="background-color: #E9E9E9;"/>	
											
								</select> </p>
								<input type="submit" name="Zoeken" value="Vind het geschikte huisje!" id="submit">
								</form>
                <br />         
				        
            </div>