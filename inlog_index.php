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
                &raquo <u>Introductiepagina</u>

            </div>
    
            <div id="main">

                <h1>
								Welkom terug 
								<?php
								echo($_SESSION['Gebr_naam']);
								?>
								op huisjestehuur.nl !</h1>
    
                <p>[informatie] </p>
                    
                <br />
                
                
                <h1>

				[Kop1]</h1>
    
                <p>[informatie] </p>
				<h1>
		
						[Kop2]</h1>
                
                <div class="img_right">
                    </div>

                <p>
                    [informatie] 
                </p>
                
    
				<p>
                    &nbsp;</p>
				<p>
        <p>          
				        
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