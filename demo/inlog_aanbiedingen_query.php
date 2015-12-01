<?php include 'session.php'; ?>
 <div id="main">

                <h1>
								Zoek hier de aanbiedingen naar uw voorkeur:</h1>
				
                <p>
                <?php 
                $mysql = mysql_connect("localhost","boesboes","geheim") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
                mysql_select_db("casus_vakantiehuisjes",$mysql) or die("Fout: Het openen van de database is mislukt!");
                $resultaat2 = mysql_query("SELECT DISTINCT Huis_Gebied FROM verhuur",$mysql) or die("De query2 op de database is mislukt!");
                mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
                ?>
								
								
                  <form id="Zoeken" action="inlog_aanbiedingen2.php" method="post">
                 
									<p>
									
									Kies uw gebied:
                  <select name="Huis_Gebied">
                  <?php
                  while(list($Huis_Gebied) = mysql_fetch_row($resultaat2))
                  {
                  print("<option value='$Huis_Gebied'>$Huis_Gebied</option>");
                  }
                  ?>
									

								
								</select> </p>
								<input type="submit" name="Zoeken" value="Ga naar volgende pagina" id="submit">
								</form>
                <br />         
				        
            </div>