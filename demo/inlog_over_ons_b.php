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
                
								&raquo <u>Over ons</u>

            </div>
    
            <div id="main">

                <h1>
				Over ons</h1>
    
                <p>Wij zijn Yves, Tom en Michel en wij hebben deze site gemaakt. <br />
								Dit deden wij voor ons informatica project van periode C. <br />
								Hoi dus! </p>
                    
                <br />
   
            </div>

        </div>
        
        		<?php
						include 'inlog_navig_b.html'
						?>

						<?php
						include 'nieuws.html'
						?>
            
						<?php
						include 'links.html'
						?>

        </div>

    </div>
    
    <div id="footer">
        <p>
            Copyright YTM - Door Yves, Tom en Michel 
                                
        </p>
    </div>

</div>

</body>
</html>