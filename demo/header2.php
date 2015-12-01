<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head> 
		<link rel="shortcut icon" href="icon.ico" type="image/x-icon"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
        <title>Vakantiehuisjes verhuur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    <link rel='stylesheet' id='camera-css'  href='../css/style_com.css' type='text/css' media='all'> 

    <style>
		body {
			margin: 0;
			padding: 0;
		}
		a {
			color: #09f;
		}
		a:hover {
			text-decoration: none;
		}
		#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 1000px;
			width: 90%;
		}
	</style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    <script type='text/javascript' src='../scripts/jquery.min.js'></script>
    <script type='text/javascript' src='../scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../scripts/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='../scripts/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: false
			});
		});
	</script>
 
</head>

<body>
	
	<div class="fluid_container">
    	<p>&nbsp;</p>
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
						<div data-thumb="../images/slides/thumbs/villa6.jpg" data-src="../images/slides/villa6.jpg">
                <!--
								<div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
								-->
            </div>
            <div data-thumb="../images/slides/thumbs/villa1.jpg" data-src="../images/slides/villa1.jpg">
                <!--
								<div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
								-->
            </div>
            <div data-thumb="../images/slides/thumbs/villa2.jpg" data-src="../images/slides/villa2.jpg">
               <!-- 
								<div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
								-->
								
            </div>
            <div data-thumb="../images/slides/thumbs/villa3.jpg" data-src="../images/slides/villa3.jpg">
                <!--
								<div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
								-->
            </div>
            <div data-thumb="../images/slides/thumbs/villa4.jpg" data-src="../images/slides/villa4.jpg">
                <!--
								<div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div>
								-->
            </div>
            <div data-thumb="../images/slides/thumbs/villa5.jpg" data-src="../images/slides/villa5.jpg">
                <!--
								<div class="camera_caption fadeFromBottom">
                    It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                </div>
								-->
            </div>
            <div data-thumb="../images/slides/thumbs/villa.jpg" data-src="../images/slides/villa.jpg">
                <!--
								<div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
								-->
            </div> 

        </div><!-- #camera_wrap_1 -->

    	 </div><!-- .fluid_container -->

</body>
</html>
