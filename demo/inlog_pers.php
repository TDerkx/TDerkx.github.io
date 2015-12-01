<?php include 'session.php'; ?>
<?php include 'header2.php'; ?>
	<div id="page" style="width: 1000px; height: 800px"> <!-- 931/628 -->
		<span style="visibility:hidden" >...weet niet hoe ik dit moet oplossen, dus dan maar zo </span>
		<?php
		ini_set('display_errors',0);
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
                U bevindt zich hier: <a href="inlog_index.php">Home</a> 
                &raquo <u>Persoonlijke informatie</u>

            </div>
						
      		<?php include ("inlog_pers_query.php"); ?>

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

        </div>

    </div>
    
            <?php
						include 'footer.html'
						?>

</div>

</body>
</html>
