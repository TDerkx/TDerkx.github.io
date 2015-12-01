<?php include 'header2.php'; ?>
	<div id="page" style="width: 1000px; height: 800px"> <!-- 931/628 -->
		<span style="visibility:hidden" >...weet niet hoe ik dit moet oplossen, dus dan maar zo </span>
		<?php
		include 'header.html'
		?>

				   
    <div id="wrapper"> 
        
        <div id="content">
        
            <div id="path">
                U bevindt zich hier: <a href="index.php">Home</a> 
                &raquo <u>Contact</u>

            </div>
    
            <div id="main">

                <h1>
								Welkom op huisjestehuur.nl !</h1>
    
                <p>		Hier kan je contact opnemen en vragen stellen aan de beheerder van de site voor een eventuele upgrade naar verhuurder.<br />
								<form method="post" action="mailto:yves.terzibasiyan0@gmail.com">
    						<textarea rows="10" cols="80" wrap="physical" name="comments">Om een bericht te sturen, log eerst in.</textarea>
								<p><a href="inloggen/login.php">&raquo Klik hier om in te loggen.</a></p>
                    
                <br />
                
                   
            </div>

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

<!-- einde index etc. -->
    
    <div style="clear:both; display:block; height:100px"></div>
</body> 
</html>