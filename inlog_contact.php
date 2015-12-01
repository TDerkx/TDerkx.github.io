<?php include 'session.php'; ?>
<?php include 'header2.php'; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
    <title>Vakantiehuisjes verhuur</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>

		
</head>
<body>

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
                &raquo <u>Contactpagina</u></a>

            </div>
    
            <div id="main">

                <h1>
					Welkom op huisjestehuur.nl !</h1>
    
                <p>		Hier kan je contact opnemen en vragen stellen aan de beheerder van de site.<br />
		<form method="post" action="mailto:fake.fake@fakemail.com">
    		<textarea rows="5" cols="50" wrap="physical" name="comments">Schrijf hier je opmerkingen en vragen
		</textarea>
		<p><input type="submit" value="Verstuur"></p>
                    
                <br />
                
                
       		        
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

        </div>

    </div>
    
            <?php
						include 'footer.html'
						?>

</div>

</body>
</html>