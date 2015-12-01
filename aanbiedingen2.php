<?php include 'header2.php'; ?>
	<div id="page" style="width: 1000px; height: 800px"> <!-- 931/628 -->
		<span style="visibility:hidden" >...weet niet hoe ik dit moet oplossen, dus dan maar zo </span>
		<?php
		include 'header.html'
		?>
						<!-- conflict met andere scripts/harder geluid plotseling 
						<?php
						include 'audio.html'
						?>
						-->

				   
    <div id="wrapper"> 
        
        <div id="content">
        
            <div id="path">
                U bevindt zich hier: <a href="index.php">Home</a> 
                &raquo <u>Aanbiedingen</u>

            </div>
						
    				<?php
						include 'aanbiedingen_query2.php'
						?>
 

        </div>
        
						<?php
						include 'navig.html'
						?>

						<?php
						include 'nieuws.html'
						?>
            
            <?php
						include 'links.html'
						?>

        </div>

    </div>
    
            <?php
						include 'footer.html'
						?>

</div>

</body>
</html>