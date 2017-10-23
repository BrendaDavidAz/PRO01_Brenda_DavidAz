<!DOCTYPE html>
<html lang="es-ES" prefix="og: http://ogp.me/ns#" class="no-js">

<head id="headerSection">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>
    <link rel="manifest" href="https://www.bromptonjunctionbcn.com/wp-content/themes/bromptonjunctionbcn.com/theme/cdn-web.brompton.com/manifest.json">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-TileImage" href="..\wp-content\themes\bromptonjunctionbcn.com\theme\cdn-web.brompton.com\mstile-144x144.png">
    <meta name="theme-color" content="#f0f0f0">

    <!--[if IE]>
			<meta name="imagetoolbar" content="no" /><meta name="msthemecompatible" content="no" /><![endif]-->
    <meta name="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta id="keywords" name="keywords" content="Brompton, Brompton Bicycle, Brompton Bicycle Ltd, Brommy, folder, folding bicycle, folding bike, commuter bicycle, commuter bike, personal transport, M Type, S Type, P Type, L Type, R Type, E Type, Andrew Ritchie">
    <meta name"description"="" content="En esta sección podrás encontrar nuestras campañas promocionales y toda la información necesaria para participar en ellas. ¡Infórmate!">
    <meta name="copyright">
    <meta name="reply-to">
    <meta property="og:url" content="index.html">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="css\main3f56.css?v=11">
    <link rel="stylesheet" href="css\rp.css">


        <script type='text/javascript' src='..\wp-content\themes\bromptonjunctionbcn.com\theme\cdn-web.brompton.com\scripts\libs.min5e1f.js?v=2'></script>
    <script type='text/javascript' src='..\wp-content\themes\bromptonjunctionbcn.com\theme\cdn-web.brompton.com\scripts\mainae52.js?v=5'></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/b1162f558b.js"></script>

    <link rel='stylesheet' id='js_composer_front-css' href='..\wp-content\plugins\js_composer\assets\css\js_composer.min.css?ver=4.8.1' type='text/css' media='all'>
<script type='text/javascript' src='..\wp-content\plugins\js_composer\assets\js\vendors\woocommerce-add-to-cart.js?ver=4.8.1'></script>


<style>
.hero-centered.red:after,
.hero-centered.branding-red:after,
.branding-red .hero-centered:after {
  border-top-color: #cbdd61 !important;
}
</style>
<script src='https://www.google.com/recaptcha/api.js'></script>


    <!--[if gte IE 9]>
			<link href="//https://www.bromptonjunctionbcn.com/wp-content/themes/bromptonjunctionbcn.com/theme/cdn-web.brompton.com/css/ie9.css" rel="stylesheet" /><![endif]-->

    <style>
        .at-svc-google_plusone_share {
            display: none!important;
        }

        .espacio_main-nav {
            margin-left: 120px;
        }
.media.hero-carousel .slideshow-pager .slideshow-pager-inner .item .description .slide-title {
    font-size: 34px !important;}
    </style>
    <meta name="VIcurrentDateTime" content="635951246780925312">
    <script type='text/javascript' src='..\wp-content\themes\bromptonjunctionbcn.com\theme\cdn-web.brompton.com\scripts\jquery-1.11.1.js'></script>
    <script type="text/javascript">
        function runScript(e) {
            if (e.keyCode === 13) {
                window.location.href = '/Search' + '?search=' + $("input[name=search]").val();
                return false;
            }
            return true;
        }

        //refresh builds popup
        $(document).ready(function() {
            if ($('.ext.saved-bikes:hidden').length) {
                __doPostBack('upMyBuilds', 'refreshbuilds');
            }
        });
    </script>
    <title>
        Promociones: Descuentos y Ofertas Brompton | Brompton Junction BCN    </title>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-77663154-1', 'auto');
      ga('send', 'pageview');

    </script>

    <link rel="stylesheet" href="css\responsive-v1.css">
<!-- Hotjar Tracking Code for https://bromptonjunctionbcn.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:472961,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

	<script type="text/javascript">
		<?php
			include('conexion.php');

			$q="SELECT nom_tipus_bici FROM tipus_bici";
			$resultado = mysqli_query($conexion,$q);
		?>
	</script>

	<script type="text/javascript">
		<?php
			include('conexion.php');

			$q="SELECT nom_tipus_bici FROM tipus_bici";
			$resultado = mysqli_query($conexion,$q);
		?>
	</script>

	<meta charset="utf-8">
	
</head>
<body>

	 <!-- HEADER-->
        <div id="header">
            <div class="header-inner">
                <a id="logo" href="..\index.htm">
	                <span>
						<brompton></brompton>
					</span>
				</a>
	            <nav class="main-nav espacio_main-nav">
	           	<ul id="ctl17_rItems_phSub_0">


					<li id="ctl17_rItems_rootLi_0">
	                    <a id="ctl17_rItems_hlItem_0" data-submenu="theBike" href="#">The Bike</a>
	                    <ul id="ctl17_rItems_phSub_0">
	                        <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                            <span class="media">
				             		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/The-Bike-Nav.jpeg" alt="The Bike" width="164" height="100">
				       			</span>
	                            <span class="title" style="margin-top: 17px;"><b>The Bike</b></span>
	                    		</a>
	                        </li>

	                        <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                            	<span class="media">
				        	  		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/How-it-works-Nav.jpeg" alt="The Bike" width="164" height="100">
				        			</span>
	                    	        <span class="title" style="margin-top: 17px;"><b>Cómo funciona</b></span>
	                            </a>
	                        </li>

	                        <li>
	                            <a href="https://www.bromptonjunctionbcn.com/the-bike/beneficios-ventajas" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	            	                <span class="media">
				                   		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/Benefits-Nav.jpeg" alt="The Bike" width="164" height="100">
				           			</span>
	                                <span class="title" style="margin-top: 17px;"><b>Beneficios</b></span>
	                            </a>
	                        </li>

	                        <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                <span class="media">
				                   		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/MAde-In-London-Nav.jpeg" alt="The Bike" width="164" height="100">
				          			</span>
	                                <span class="title" style="margin-top: 17px;"><b>Made in London</b></span>
	                            </a>
	                        </li>

	                        <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                <span class="media">
				                   		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/01-Black--Black-Brompton-Unfolded-nav.jpeg" alt="The Bike" width="164" height="100">
				          			</span>
	                                <span class="title" style="margin-top: 17px;"><b>Edicion especial</b></span>
	                            </a>
	                        </li>

							<li>
	                            <a href="..\bicicleta\brompton-electrica\index.htm" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                <span class="media">
				                  		<img src="..\wp-content\uploads\2017\09\electricamenu.jpg" alt="The Bike" width="164" height="100">
				          			</span>
	                                <span class="title" style="margin-top: 17px;"><b>Brompton eléctrica</b></span>
	                            </a>
	                        </li>

	                    </ul>
	                </li>
				
					<li id="ctl17_rItems_rootLi_0">
	                    <a id="ctl17_rItems_hlItem_0" data-submenu="theBike" href="index.html">Anuncis</a>
					</li>

	                <li id="ctl17_rItems_rootLi_0">
	                    <a id="ctl17_rItems_hlItem_0" data-submenu="theBike" href="#">Actualidad</a>
	                        <ul id="ctl17_rItems_phSub_0">
	                            <li>
	                                <a href="..\actualidad\noticias\index.htm" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                    <span class="media">
				                    		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/Journey-Nav.jpg" alt="The Bike" width="164" height="100">
				               			</span>
	                                    <span class="title" style="margin-top: 17px;"><b>Noticias</b></span>
	           		                </a>
	                            </li>

	                	        <li>
	                                <a href="..\actualidad\eventos\index.htm" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                    <span class="media">
				        	           		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/Benefits-Nav.jpeg" alt="The Bike" width="164" height="100">
				              			</span>
	                                    <span class="title" style="margin-top: 17px;"><b>Eventos</b></span>
	                                </a>
	                            </li>
	                        </ul>
	                </li>
	    
	                <li id="ctl17_rItems_rootLi_0">
	                    <a id="ctl17_rItems_hlItem_0" data-submenu="theBike" href="index.html">Club House</a>
	    	        </li>
	                <li id="ctl17_rItems_rootLi_0">
	                    <a id="ctl17_rItems_hlItem_0" data-submenu="theBike" href="index.html">Tienda Junction</a>
	                        <ul id="ctl17_rItems_phSub_0">
	                            <li>
	                                <a href="" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                    <span class="media">
				                    		<img src="..\wp-content\uploads\2016\06\slider2-1.jpg" alt="The Bike" width="164" height="100">
				              			</span>
	                                    <span class="title" style="margin-top: 17px;"><b>Visita Virtual</b></span>
	                                </a>
	                            </li>

	                            <li>
    	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                    <span class="media">
				                    		<img src="..\wp-content\uploads\2016\08\equipo.png" alt="The Bike" width="164" height="100">
			                			</span>
	                                    <span class="title" style="margin-top: 17px;"><b>Equipo</b></span>
	                                </a>
	                            </li>
	                        </ul>
	                </li>

	                <li id="ctl17_rItems_rootLi_0">
	                    <a id="ctl17_rItems_hlItem_0" data-submenu="theBike" href="#">Comprar</a>
	                    <ul id="ctl17_rItems_phSub_0">
	                        <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                <span class="media">
			                    		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/brompton-junction-maintenance-event.jpg" alt="The Bike" width="164" height="100">
		                			</span>
	                                <span class="title" style="margin-top: 17px;"><b>¿Por qué comprar?</b></span>
	                            </a>
	                        </li>

	                        <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                <span class="media">
			                    		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/Build-Nav.jpeg" alt="The Bike" width="164" height="100">
		                			</span>
	                                <span class="title" style="margin-top: 17px;"><b>Configurador</b></span>
	                            </a>
	                        </li>

	                        <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                <span class="media">
			                    		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/Collaborations-Nav.jpeg" alt="The Bike" width="164" height="100">
		                			</span>
	                                <span class="title" style="margin-top: 17px;"><b>Accesorios</b></span>
	                            </a>
	                        </li>
                                    
        	                <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                <span class="media">
				                   		<img src="..\wp-content\uploads\2017\09\p1menu.jpg" alt="Segunda mano" width="164" height="100">
				           			</span>
	                                <span class="title" style="margin-top: 17px;"><b>Precio Brompton</b></span>
	                            </a>
	                        </li>
	                    </ul>
	                </li>

	                <li id="ctl17_rItems_rootLi_0">
	                    <a id="ctl17_rItems_hlItem_0" data-submenu="theBike" href="#">Servicios</a>
	                    <ul id="ctl17_rItems_phSub_0" style="    text-align: right !important; ">
	                        <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                <span class="media">
			                    		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/Events-nav.jpeg" alt="The Bike" width="164" height="100">
			               			</span>
	                                <span class="title" style="margin-top: 17px;"><b>Servicios a clientes</b></span>
	                            </a>
	                        </li>

	                        <li>
	                            <a href="index.html" id="ctl17_rItems_ctl00_0_rItems_0_hlItem_0" target="">
	                                <span class="media">
			                    		<img src="https://cdn-web.brompton.com/~/media/Images/Menu-Images/MAde-In-London-Nav.jpeg" alt="The Bike" width="164" height="100">
			              			</span>
	                                <span class="title" style="margin-top: 17px;"><b>Soporte Técnico</b></span>
	                            </a>
	                        </li>
	                    </ul>
	            </li>

	            <li id="ctl17_rItems_rootLi_0">
	                <a id="ctl17_rItems_hlItem_0" data-submenu="theBike" href="index.html">Contacta</a>
				</li>

	        	</ul>
	        	</nav>

                <div class="extas">
                    <div id="upMyBuilds" style="display:inline;">

                    </div>
                    <a href="#sidr-main" class="ext mobile-menu">
                        <div class="icon"></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

        <div id="main_0_pnlContainer" class="hero-centered red" style="background-color: #cbdd61">

		    <div class="content">
		        <div id="main_0_pnlTriptychIcon" class="triptych-icon"></div>
	       		<h2>Anuncios</h2>
	    	</div>
		</div>

		<div class="container-fluid">
		    <div class="row">
	    	    <div class="col-md-12">
	        	    <!-- <div class="vc_row wpb_row vc_row-fluid mpc-row"></div><div class="wpb_column vc_column_container vc_col-sm-12 mpc-column" data-column-id="mpc_column-1859e8c2d5bb524"></div><div class="vc_column-inner "></div><div class="wpb_wrapper"></div>
					<div class="wpb_raw_code wpb_content_element wpb_raw_html">
					<div class="wpb_wrapper">
				    <div class="chessboard"> -->
	    			<div class="split-image-text">
	    				<div class="content">

			            	<!-- añadir formulario  -->
			           		<h1>Publicación de bicicletas</h1>

							<form action="up_anuncis.php">
								Tipus de bicicleta: <select name="tipus_bici">
									<?php
										
										if (mysqli_num_rows($resultado)>0) {
											//$num_productos = mysqli_num_rows($resultado);
											//echo "Productos encontrados: $num_productos <br/><br/>";

											while ($tipus_bici=mysqli_fetch_array($resultado)) {
												echo "<option name='" . $tipus_bici['nom_tipus_bici'] ."'>" . $tipus_bici['nom_tipus_bici'] . "<option>";
											}
										}				
									?>			
								</select><br>
								Marca: <input type="text" name="marca_bici"><br>
								Model: <input type="text" name="model_bici"><br>
								Color: <input type="text" name="color_bici"><br>
								Població: <input type="text" name="poblacio"><br>
								Telefon: <input type="text" name="telefon"><br>
								Ubicacio: <input type="text" name="ubicacio"><br>
								Recompensa: <input type="text" name="recompensa"><br>
								Descripcio: <input type="text" name="descripcio"><br>
								Data robatori: <input type="text" name="data_robatori"><br>
								<!-- Data robatori: <input type="text" name="data_robatori"><br> -->
								<input id="enviar" type="submit" name="enviar" value="Publicar">
							</form>
						</div>
					<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

					</div>
        			<div id="main_1_chessElements_mediaWrraper_0" class="media" style="margin-top: 0px !important;">

            			<div class="image backgroud-cover" style="background-image: url('../wp-content/uploads/2016/07/1-4.jpg');"><img src="..\wp-content\uploads\2016\07\1-4.jpg" alt="Black Edition close up" style="opacity: 0;"></div>

        			</div>
    			</div>
				<div class="image backgroud-cover" style="background-image: url('../wp-content/uploads/2016/09/2-4.jpg');"><img src="..\wp-content\uploads\2016\09\2-4.jpg" alt="Close Up Brompton Nickel Edition" style="opacity: 0;"></div>
			</div>
		</div>

		<div class="breadcrumbs">
    		<div class="content-grid">
        		<div class="box">
        		    <span class="removed_link" title="index.html">¿Quieres poner ununcio de tu bicicleta perdida?</span> » Empieza aquí</div>
    	    <div class="box">
        		<div class="triptych-icon"></div>
        	</div>
       	</div>

       	<div id="ctl22_subscriptionPanel">
            <div class="signup">
        	    <div class="content-wrapper">
            	    <div class="signup-and-social">
                	    <div class="label" style="    color: #909090;">
                        ¿Quieres mantenerte al tanto de nuestras novedades? Déjanos tu correo para  suscribirte a nuestro newsletter.                    </div>
                    	<div id="ctl22_sigunpWrapper" style="padding-left: 35px;" class="signup-wrapper" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl22_submitButton&#39;)">

                        	<input name="ctl22$emailField" type="text" id="ctl22_emailField" placeholder="Escribe tu email para registrarte" data-mobile-placeholder="Email address" class="email">
                        	<span id="ctl22_emailValidation" class="required" style="visibility:hidden;">Invalid Email Format</span>
                        	<input type="submit" name="ctl22$submitButton" value="Enviar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl22$submitButton&quot;, &quot;&quot;, true, &quot;Subscription&quot;, &quot;&quot;, false, false));" id="ctl22_submitButton" class="new_lett">
                        </div>

        	            <div class="social">
            	            <a class="social-link twitter" href="#"></a>
	                        <a class="social-link facebook" href="index.html" target="_blank"></a>

                        	<a class="social-link instagram" href="index.html" target="_blank">
                        	</a>
                    	</div>
                	</div>
            	</div>
        	</div>
        </div>

        <div id="footer">
    		<div class="content-wrapper">

        		<div class="footer-nav">
            		<div id="ctl23_FirstBlockContainer" class="col">
                		<ul>
        		            <li>
    		                    <strong><a href="index.html">La bici</a></strong>
            		        </li>
                    		<li>
                        		<a href="index.html">Beneficios</a>
                    		</li>
                    		<li><a href="index.html">Hecho en Londres</a></li>
                		</ul>
            		</div>
            		<div id="index.html" class="col">
                		<ul>
                    		<li>
                        		<strong><a href="#">Comprar</a></strong></li>
                    		<li><a href="index.html">Crea tu Brompton</a></li>
                    		<li><a href="index.html">¡Te ayudamos a elegir!</a></li>
                		</ul>
            		</div>

            		<div id="ctl23_FourthBlockContainer" class="col">
                		<ul>
                    		<li>
                        		<strong><a href="#">Comunidad</a></strong></li>
                    		<li>
                        		<a href="index.html">Noticias</a>
                    		</li>
                    		<li>
                        		<a href="index.html">Eventos</a></li>
                		</ul>
            		</div>
            	</div>

        		<div class="footer-bottom">
            		<div class="inside">
                		<div class="left">
                    		<div class="copy">© 2016 Brompton Bicycle Ltd</div>
                		</div>
                		<div class="right">
                    		<div class="links">

            	            	<a href="/Legal/Terms-of-use">Términos de uso</a>

            	            	<a href="/Legal/Privacy-policy">Política de privacidad</a>

                	        	<a href="/Legal/Cookies">Cookies</a>
                    	    </div>
                    	</div>
                	</div>
                </div>
            </div>
        </div></div>
    </body>
</html>
