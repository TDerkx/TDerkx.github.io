<?php include 'header2.php'; ?>
	<div id="page" style="width: 1000px; height: 800px"> <!-- 931/628 -->
		<span style="visibility:hidden" >...weet niet hoe ik dit moet oplossen, dus dan maar zo </span>
		<?php
		ini_set('display_errors',0);
		include 'header.html'
		?>

				   
    <div id="wrapper"> 
        
    
           <div id="content">
        
            <div id="path">
                U bevindt zich hier: <a href="index.php">Home</a> 
                &raquo <u>Aanbiedingen</u>

            </div>
						
    				<?php
						include 'aanbiedingen_query3.php';
						print("<b><p><a href='inlog_aanbiedingen.php'>Ga terug voor een nieuwe poging</a></p></b>");
						?>
 

        </div>

        </div>
        
						<?php
						include 'inlog_navig.php'
						?>

						<?php
						include 'nieuws.html'
						?>
            
						<?php
						include 'links.html'
						?>
						
						<!-- conflict met andere scripts/harder geluid plotseling 
						<?php
						include 'audio.html'
						?>
						-->
        </div>

    </div>
    
            <?php
						include 'footer.html'
						?>

</div>

    <div style="clear:both; display:block; height:100px"></div>
</body> 
</html>
