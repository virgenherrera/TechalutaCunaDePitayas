<?php
include_once 'php/funciones.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="es-MX"><head>
    <meta charset="utf-8">
    <title>Cooperativa Techaluta Cuna de Pitayas S.C. de R.L.</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abril+Fatface&amp;subset=latin">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<style>.content .postcontent-0 .layout-item-0 { margin-bottom: 10px;  }
.content .postcontent-0 .layout-item-1 { border-spacing: 10px 0px; border-collapse: separate;  }
.content .postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#FF0000;border-right-color:#FF0000;border-bottom-color:#FF0000;border-left-color:#FF0000; color: #222211; background: #E5FFD2; padding-right: 10px;padding-left: 10px; border-radius: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style>

   <!--FBML-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=276041512488182";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!--Fin FBML-->
    
</head>
<body>
<div id="main">
<header class="header clearfix">


    <div class="shapes">

<div class="object1658491506" data-left="97.23%"></div>

            </div>

                <div id="flash-area">
                    <div id="flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1400" height="350" id="flash-object">
                        <param name="movie" value="images/flash.swf">
                        <param name="quality" value="high">
                    	<param name="scale" value="default">
                    	<param name="wmode" value="transparent">
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                        <param name="swfliveconnect" value="true">
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="images/flash.swf" width="1400" height="350">
                            <param name="quality" value="high">
                    	    <param name="scale" value="default">
                            <param name="wmode" value="transparent">
                                                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                            <param name="swfliveconnect" value="true">
                        <!--<![endif]-->
                          	<div class="flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
<?php
include_once 'menu.html';
?>

                    
</header>
<div class="sheet clearfix">
            <div class="layout-wrapper clearfix">
                <div class="content-layout">
                    <div class="content-layout-row">
                        <div class="layout-cell content clearfix"><article class="post article">
                                <h2 class="postheader">Directorio de Soccios</h2> <a href="files/Directorio_Socios.pdf" target="_blank">descarga Aqui la version PDF</a>
                                                
                <div class="postcontent postcontent-0 clearfix"><div class="content-layout-wrapper layout-item-0">
<div class="content-layout layout-item-1">
    <div class="content-layout-row">
    <div class="layout-cell layout-item-2" style="width: 100%" >
    <?php
	$socios = consulta_bucle('SELECT * FROM campos');
	while($socio = mysql_fetch_array($socios)){
		echo utf8_encode('<hr><h2>Socio: ' . $socio['nombre']. '</h2>');
		echo utf8_encode('<strong>Descripcion de Negocio: ' . $socio['descripcion_negocio'] . '</strong><br>');
		if(isset($socio['domicilio']) && !empty($socio['domicilio'])){
			echo utf8_encode('<strong>Domicilio: ' . $socio['domicilio']. '</strong><br>');
		}//fin if@domicilio
		if(isset($socio['telefono']) && !empty($socio['telefono'])){
			echo utf8_encode('<strong>Telefono: ' . $socio['telefono']. '</strong><br>');
		}//fin if@telefono
	}
	?>
    </div>
    </div>
</div>
</div>

</div>
</article></div>
                        <div class="layout-cell sidebar1 clearfix"><div class="block clearfix">
        <div class="blockheader">
            <h3 class="t">FB</h3>
        </div>
        <div class="blockcontent">
        	<div class="fb-like" data-href="https://www.facebook.com/pages/Techaluta-Cuna-de-Pitayas/" data-send="false" data-width="80%" data-show-faces="true" data-colorscheme="dark"></div>
        </div>
</div><div class="block clearfix">
        <div class="blockheader">
            <h3 class="t">Twitter</h3>
        </div>
        <div class="blockcontent">
        	<a class="twitter-timeline" href="https://twitter.com/Techaluta_Cuna" data-widget-id="273529533729226754">Tweets por @Techaluta_Cuna</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        </div>
</div></div>
                    </div>
                </div>
            </div><footer class="footer clearfix">
<p style="text-align:justify"><a href="index.php">Quienes Somos</a> | <a href="como-ser-socio.php">Como ser Socio</a> | <a href="servicios-que-ofrecemos.php">Servicios que ofrecemos</a> | <a href="directorio-socios.php">Directorio de socios</a> | <a href="contactanos.php">Contactanos</a></p>
<hr>
Cooperativa Techaluta Cuna de Pitayas S.C. de R.L. Copyright © 2011. Reservados todos los derechos.
</footer>

    </div>
    <p class="page-footer">
        <span id="footnote-links">Designed by <a href="http://www.tapalpawebs.com/" target="_blank">Hugo_Enrique@TapalpaWebs</a>.</span>
    </p>
</div>


</body></html>