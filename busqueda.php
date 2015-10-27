<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--Conexion con la BD botiga animals-->
<?php
$con = mysqli_connect('localhost', 'root', 'DAW22015', 'BD_botiga_animals');
$sql = "SELECT * FROM tbl_raca ORDER BY raca_nom ASC";
$sql2 = "SELECT * FROM tbl_municipi ORDER BY municipi_nom ASC";
$sql3 = "SELECT * FROM tbl_tipus_animal ORDER BY tipus_anim_nom ASC";
$query = mysqli_query($con,$sql);
$query2 = mysqli_query($con,$sql2);
$query3 = mysqli_query($con,$sql3);
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<title>Productos para mascotas: comida y accesorios para animales</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Tienda online de productos para mascotas. Conoce nuestro Compromiso Social Misterguau y descubre las razones por las que confiar a Misterguau la compra de tu mascota." />
<meta name="keywords" content="productos para mascotas, comprar cachorros, comprar mascotas, comprar mascotas misterguau, comida para mascotas, accesorios mascotas, protectoras de animales, apadrinar cachorros, adopcion animales misterguau, criticas misterguau, multas misterguau" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta charset="utf-8">
<meta name="google-site-verification" content="Mi2Gyy2Ae0jO7d1xlgmlL9g6di9fQJMqo5vDQqJmg1A" />
<link rel="icon" href="http://www.misterguau.com/skin/frontend/blank/theme048/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.misterguau.com/skin/frontend/blank/theme048/favicon.ico" type="image/x-icon" />

 <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 

  ga('create', 'UA-41503841-1', 'misterguau.com');

  ga('send', 'pageview');

 

</script>


<script type="text/javascript">

//<![CDATA[
    var BLANK_URL = 'http://www.misterguau.com/js/blank.html';
    var BLANK_IMG = 'http://www.misterguau.com/js/spacer.gif';
//]]>
</script>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/clears.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" media="all" />
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/j2t-rewardpoints.css" media="all" />
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/print.css" media="print" />
<script type="text/javascript" src="http://www.misterguau.com/js/prototype/prototype.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/prototype/validation.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/builder.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/effects.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/dragdrop.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/controls.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/slider.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/js.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/form.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/menu.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/mage/translate.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/mage/cookies.js"></script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://www.misterguau.com/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/iehover-fix.js"></script>
<![endif]-->
<script type="text/javascript">var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.":"Por favor, use s\u00f3lo n\u00fameros en este campo. Evite espacios u otros caracteres como puntos y comas.","Please use letters only (a-z) in this field.":"Por favor, use s\u00f3lo letras (a-z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) en este campo. No se permiten espacios ni otros caracteres.","Please use only letters (a-z) or numbers (0-9) or spaces and # only in this field.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) o espacios y # en este campo.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters.":"Por favor, escriba 6 o m\u00e1s caracteres.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. http:\/\/ is required":"Por favor, escriba una ULR v\u00e1lida. http:\/\/ es obligatorio","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter valid password.":"Por favor, escriba una contrase\u00f1a v\u00e1lida.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Error: Passwords do not match":"Error: Las contrase\u00f1as no coinciden","Your order can not be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"Su pedido no puede completarse en este momento ya que no existen m\u00e9todos de env\u00edo disponibles. Por favor, realice los cambios necesarios en la direcci\u00f3n de env\u00edo.","Please specify shipping method.":"Por favor, especifique m\u00e9todo de env\u00edo.","Please specify payment method.":"Por favor, especifique forma de pago.","Your session has been expired, you will be relogged in now.":"Su sesi\u00f3n ha expirado. Tendr\u00e1 que ingresar nuevamente.","Incorrect credit card expiration date":"Fecha de caducidad de la tarjeta de cr\u00e9dito incorrecta"});</script>
</head>
<body class=" cms-index-index cms-home">

<div class="wrapper" id="wrap">
        <div class="page">
        <div class="header_new">
  	<h1>MISTER GUAU</h1>
  <a href="http://www.misterguau.com/index.php/"><img src="http://www.misterguau.com/skin/frontend/blank/theme048/images/logo.jpg" width="630" height="75" /></a>
  </div>
  <div class="bC_caja">
    <ul class="menu-left">
      <li><a href="http://www.misterguau.com/index.php/customer/account/">REGISTRO</a></li>
      <li>/</li>
            <li><a href="http://www.misterguau.com/index.php/customer/account/login/">INICIAR SESIÓN</a></li>
            <!--li>/</li>
      <li><a href="http://www.misterguau.com/index.php/customer/account/">MI CUENTA</a></li-->
    </ul>
    <ul class="menu-right">
      <li><a href="http://www.misterguau.org" target="_blank">BLOG</a></li>
      <li>/</li>
      <li><a href="http://pasionporlosanimales.com" target="_blank">COMPROMISO SOCIAL</a></li>
      <li>/</li>
      <li><a href="http://www.misterguau.tv" target="_blank">SOBRE NOSOTROS</a></li>
    </ul>
  </div>
  <div class="banners_box">
    <div class="caja_banners">
      <div id="destacados">
      <div id="menu_animales">
           <ul id="animales" class="lista_animales">
              <li class="foto1"><a href="http://www.misterguau.com/index.php/Perros.html/"></a></li>
              <li class="foto2"><a href="http://www.misterguau.com/index.php/Gatos.html/"></a></li>
              <li class="foto3"><a href="http://www.misterguau.com/index.php/Peces.html/"></a></li>
              <li class="foto4"><a href="http://www.misterguau.com/index.php/Aves.html/"></a></li>
              <li class="foto5"><a href="http://www.misterguau.com/index.php/Reptiles.html/"></a></li>
              <li class="foto6"><a href="http://www.misterguau.com/index.php/Roedores-y-mamiferos.html/"></a></li>
              <li class="foto7"><a href="http://www.misterguau.com/index.php/tortugas-de-agua.html/"></a></li>
           </ul>
   	  </div>
      </div>
    </div>
  </div>
  <div class="bread_header">
  	  </div>
  <div style="height:6px; background-color:#000;margin-bottom:10px;"></div>		
				
        <div class="caja_categ_product">
            <div class="content_izq"><div class="SC_caja">
	<div class="cart_title">MI COMPRA</div>
	<div class="line-sep"></div>
	<div class="cart_valores"><span>0 /</span> Articulos</div>
	<div class="ver-cesta"><a href="http://www.misterguau.com/index.php/checkout/cart/">ver ></a></div>
</div>
<div class="color-line-after-sidebar">&nbsp;</div><div class="SB_caja">
	<div class="search-box">
		
	</div>
</div>
<div class="vertical-nav-container box base-mini">
    <div id="vertical-nav">


	<div class="block block-poll">

   <div class="main-block">
								<div class="border-bot">
									<div class="border-left">
										<div class="border-right">
											<div class="corner-left-top">
												<div class="corner-right-top">
													<div class="corner-left-bot">
														<div class="corner-right-bot">
															<div class="full-width">


	 <div class="block-title">

            <div class="sideblock-title">
								<div class="border-left">
									<div class="border-right">
										<div class="border-top">
											<div class="corner-left-top">
												<div class="corner-right-top">            	<h2>Categorías</h2>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
        <div class="block-content">





        <ul id="nav_vert">
                                                <li><a href="http://www.misterguau.com/index.php/ofertas.html" class="potential" >OFERTAS Y REGALOS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html" class="potential" >OUTLET Corner</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/perros.html" class="potential" >PERROS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html" class="potential" >GATOS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html" class="potential" >ROEDORES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/aves.html" class="potential" >AVES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/reptiles.html" class="potential" >REPTILES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/tortugas-de-agua.html" class="potential" >TORTUGAS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/peces.html" class="potential" >PECES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/schleich-tu-otra-mascota.html" class="potential" >SCHLEICH - Juguetes</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                    </ul>
		</div>
	</div>
	</div>										</div>

										</div>
									</div>
																		</div>									</div>
										</div>
										</div>
		</div>
   	 </div>
    </div>
</div> <p>&nbsp;</p>
<p>&nbsp;</p>
<p><a title="Facebook MISTERGUAU" href="https://www.facebook.com/misterguau" target="_blank"><img src="http://www.misterguau.com/media//Facebook_MISTERGUAU.png" alt="Facebook MISTERGUAU" /></a><a title="Youtube MISTERGUAU" href="http://www.youtube.com/user/misterguaucenter" target="_blank"><img src="http://www.misterguau.com/media//Youtube_MISTERGUAU.png" alt="Youtube MISTERGUAU" /></a></p>
<p>&nbsp;</p>
<p><a title="Outlet MISTERGUAU" href="http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html" target="_self"><img src="http://www.misterguau.com/media//Oulet_1.jpg" alt="Outlet hasta -70%" /></a></p>
<p>&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p>
<script src="http://w.sharethis.com/button/buttons.js" type="text/javascript"></script>
<script type="text/javascript">// <![CDATA[
stLight.options({publisher: "95e01ef6-d710-492e-b27e-2b57dbb37911"});
// ]]></script>
</p></div>
<div class="box_specialoffers">
                
               
    <?php
    	
			//realizamos la conexión con mysql
			$con = mysqli_connect('localhost', 'root', 'DAW22015', 'BD_botiga_animals');
		$comprovado=0;
			//como la sentencia SIEMPRE va a buscar todos los registros de la tabla producto, pongo en la variable $sql esa parte de la sentencia que SI o SI, va a contener
			$sql = "SELECT tbl_anunci.anu_nom, tbl_anunci.anu_contingut, tbl_anunci.anu_data, tbl_anunci.anu_foto, tbl_raca.raca_nom, 
						   tbl_raca.raca_id, tbl_contacte.contact_nom, tbl_contacte.contact_telf, tbl_contacte.contact_adre, tbl_municipi.municipi_nom,
						   tbl_tipus_animal.tipus_anim_nom, tbl_anunci.anu_tipus, tbl_anunci.anu_id
						   FROM ((((tbl_anunci INNER JOIN tbl_municipi ON tbl_anunci.mun_id = tbl_municipi.municipi_id) 
						   					   INNER JOIN tbl_contacte ON tbl_anunci.contact_id = tbl_contacte.contact_id)
											   INNER JOIN tbl_raca ON tbl_anunci.raca_id = tbl_raca.raca_id) 
											   INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id = tbl_tipus_animal.tipus_anim_id)";

			//Filtro de radiobutton perdido o encontrado
			
			if(isset($_REQUEST['perdtrob'])){
				$radiobutton = $_REQUEST['perdtrob'];
				if ($radiobutton=="Perdut"){
					$sql.= "WHERE tbl_anunci.anu_tipus='$radiobutton'" ;
				}else{
					$sql.= "WHERE tbl_anunci.anu_tipus='$radiobutton'" ; 	
					}
				$comprovado = 1;
			}

				//Filtro de seleccion de tipo animal
				//Crear una variable $comprovado, segun el valor si es 0 o 1, se añadira un AND o WHERe en la sentencia sql
			if ($comprovado==1){
				if(isset($_REQUEST['tipus_animal'])){
					
					$tipus_animal = $_REQUEST['tipus_animal'];
					if ($tipus_animal=="Gos"){
						$sql.= " AND tbl_tipus_animal.tipus_anim_nom='$tipus_animal' " ;
					}
					if ($tipus_animal=="Gat"){
						$sql.= " AND tbl_tipus_animal.tipus_anim_nom='$tipus_animal' " ;
					}
					if($tipus_animal=="Ocell"){
						$sql.= " AND tbl_tipus_animal.tipus_anim_nom='$tipus_animal' " ;
					}
					if ($tipus_animal=="Altres"){
						$sql.= " AND tbl_tipus_animal.tipus_anim_nom='$tipus_animal' " ;
					}
				}
			}else{
				if(isset($_REQUEST['tipus_animal'])){
					$tipus_animal = $_REQUEST['tipus_animal'];
					if ($tipus_animal=="Gos"){
						$sql.= " WHERE tbl_tipus_animal.tipus_anim_nom='$tipus_animal' " ;
					}
					if ($tipus_animal=="Gat"){
						$sql.= " WHERE tbl_tipus_animal.tipus_anim_nom='$tipus_animal' " ;
					}
					if($tipus_animal=="Ocell"){
						$sql.= " WHERE tbl_tipus_animal.tipus_anim_nom='$tipus_animal' " ;
					}
					if ($tipus_animal=="Altres"){
						$sql.= " WHERE tbl_tipus_animal.tipus_anim_nom='$tipus_animal' " ;
					}
					$comprovado = 1;
				}
			}

			 //Filtro de seleccion de municipio
			
				if($comprovado==1){
					if(isset($_REQUEST['ciudad'])) {

						$ciudad = $_REQUEST['ciudad'];
						$sql.= "AND tbl_municipi.municipi_nom='$ciudad' ";
					}
				}else{
					if(isset($_REQUEST['ciudad'])) {
						$ciudad = $_REQUEST['ciudad'];
						$sql.= "WHERE tbl_municipi.municipi_nom='$ciudad' ";
					}
					if ($_REQUEST['ciudad']=0) {
						$sql.="";
					}
				}
			
			
			//mostrar todos los datos con un while
			echo "$sql<br/>";
		
			$datos = mysqli_query($con, $sql);
			$filas= mysqli_num_rows($datos);
			echo $filas;
			if($filas!=0){
				 while($prod = mysqli_fetch_array($datos)){
					$prod['anu_contingut']=utf8_encode($prod['anu_contingut']);
					$prod['municipi_nom']=utf8_encode($prod['municipi_nom']);
					$prod['raca_nom']=utf8_encode($prod['raca_nom']);

					echo "<b>Municipio:</b> $prod[municipi_nom]<br/><br/>";
					echo "<b>Estado:</b> $prod[anu_tipus]<br/><br/>";
					echo "<b>Raza:</b> $prod[raca_nom]<br/><br/>";
					echo "<b>Descripción:</b> $prod[anu_contingut]<br/>";
					
					//mostrar imagen correspondiente anidada al id del anuncio
					$fichero="img/$prod[anu_id].jpg";
					if(file_exists($fichero)){
						echo "<img src='$fichero'><br/><br/><br/>";
					} else {
						echo "<img src='img/no_disponible.jpg'><br/><br/><br/>";
					}

				}
			}else{
				echo "<h1>No hay resultados</h1>";
				}

			//cerramos la conexión con la base de datos
			mysqli_close($con);
	?>
</p></div>
            </div>
            <div class="content_der"><div class="banner"><a title="Tipos de pago" href="http://www.misterguau.com/index.php/condiciones" target="_self"><img src="http://www.misterguau.com/media//VISA.jpg" alt="Tipos de pago aceptados" /></a></div>
<div class="banner"><a href="mailto: clientes@misterguau.com"><img src="http://www.misterguau.com/media//Contactanos.jpg" alt="Tienda online" /></a></div>
<div class="banner"><a title="Contactar tiendas f&iacute;sicas" href="http://www.misterguau.tv/tiendas-mister-guau" target="_blank"><img src="http://www.misterguau.com/media//Contacto02.jpg" alt="Contactar tiendas f&iacute;sicas" /></a></div>
<div class="banner"><a title="Contactar veterinarios" href="http://www.misterguau.tv/veterinaria-mister-guau" target="_blank"><img src="http://www.misterguau.com/media//Contacto03_1.jpg" alt="Contactar veterinarios" /></a></div>
<div class="banner"><a title="10% Dto extra en todos tus pedidos!" href="http://www.misterguau.com/Promociones" target="_self"></a><a title="Nuestro compromiso social" href="http://www.misterguau.com/Compromiso_social" target="_self"><img src="http://www.misterguau.com/media//Compromiso_MISTERGUAU_1.jpg" alt="Compromiso social MISTERGUAU" /></a></div>
<div class="banner"><a style="font-size: 12px;" title="Las mejores ofertas para tus mascotas" href="http://www.misterguau.com/index.php/ofertas.html" target="_self"><img src="http://www.misterguau.com/media//file_2.jpg" alt="Las mejores ofertas para mascotas" /></a></div>
<div class="banner"></div>
<p>&nbsp;</p>
<div class="block block-subscribe">
<a href="http://www.misterguau.com/tienda/banner">
<img src="http://www.misterguau.com/tienda/media/BannerCR.png">
<img src="http://www.misterguau.com/tienda/media/Banner_portes.png"></a><!--
    <div class="main-block">
								<div class="border-bot">
									<div class="border-left">
										<div class="border-right">
											<div class="corner-left-top">
												<div class="corner-right-top">
													<div class="corner-left-bot">
														<div class="corner-right-bot">
															<div class="full-width">        <div class="block-title">   
             <div class="sideblock-title">
								<div class="border-left">
									<div class="border-right">
										<div class="border-top">
											<div class="corner-left-top">
												<div class="corner-right-top">                        
           		 <h2>Boletín de noticias<a name="newsletter-box"></a></h2>  
             </div>
											</div>
										</div>
									</div>
								</div>
							</div>         
        </div>
        <div class="block-content">
            <form action="http://www.misterguau.com/index.php/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
                <fieldset>
                    <legend>Boletín de noticias</legend>
                                        <label for="newsletter">Subscribirse al boletín de noticias</label>
                    <input name="email" type="text" id="newsletter" class="input-text required-entry validate-email" />
                    <button type="submit" class="button"><span><span><span>Subscribirse</span></span></span></button>
                </fieldset>
            </form>
        </div>
    <script type="text/javascript">
    //<![CDATA[
        var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
    //]]>
    </script>
  </div>
						 								</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
</div> 
</div>
        </div>
        <div class="footer">

<div class="formaPago">
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/servired.jpg" width="45" height="30" />
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/maestro.jpg" width="45" height="30" />
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/visa.jpg" width="45" height="30" />
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/americanexpress.jpg" width="45" height="30" /> 
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/euro6000.jpg" width="45" height="30" /> 
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/4b.jpg" width="45" height="30" /> 
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/mastercard.jpg" width="45" height="30" /> 
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/paypal.jpg" width="45" height="30" />
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/trasnferencia.jpg" width="75" height="30" class="last" /> 
</div>

	<div class="main-block">
								<div class="border-bot">
									<div class="border-left">
										<div class="border-right">
											<div class="corner-left-top">
												<div class="corner-right-top">
													<div class="corner-left-bot">
														<div class="corner-right-bot">
															<div class="full-width">        <div class="col-1">
            &copy; 2010 MISTERGUAU. Todos los derechos reservados. Centro profesional animal, S.L. Núcleo zoológico: B2500920                    </div>
        <div class="col-2">
            <ul>
<li><a href="http://www.misterguau.com/index.php/sobre_nosotros">Quienes somos</a></li>
<li class="last"><a href="http://www.misterguau.com/index.php/condiciones">Condiciones de Uso</a></li>
<li class="last"><a href="http://www.misterguau.com/index.php/metodos">M&eacute;todos de env&iacute;o</a></li>
</ul>
<p>&nbsp;</p>            <ul class="links">
            <li class="first" ><a href="http://www.misterguau.com/index.php/catalog/seo_sitemap/category/" title="Mapa del sitio" >Mapa del sitio</a></li>
    
	
	        <li ><a href="http://www.misterguau.com/index.php/catalogsearch/term/popular/" title="Términos de búsqueda" >Términos de búsqueda</a></li>
    
	
	        <li ><a href="http://www.misterguau.com/index.php/catalogsearch/advanced/" title="Búsqueda Avanzada" >Búsqueda Avanzada</a></li>
    
	
	        <li class=" last" ><a href="http://www.misterguau.com/index.php/contacts/" title="Contáctenos" >Contáctenos</a></li>
    
	
	</ul>
        </div>
        <div class="clear"></div>
    </div>
						 								</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>
</html>
		