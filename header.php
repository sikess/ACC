<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="chrome=1">

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'themename' ), max( $paged, $page ) );

	?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--  Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<!-- Place favicon.ico and apple-touch-icons in the images folder -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png"><!--60X60-->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-ipad.png"><!--72X72-->
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-iphone4.png"><!--114X114-->
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-ipad3.png">	<!--144X144-->	
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/index.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/foundation.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/foundation-icons/foundation-icons.css" type="text/css" />
	



	<?php wp_head(); ?>

	</head>
	
	<body <?php body_class(); ?>>



</script>

<div id="con_menu_top">

    <div class="row hide-for-small">
        <div class="cont_secciones_top">

          <div class="small-6 large-6 columns hide-for-small lista_izq_top padding_top_left">
            <ul>
              <li><a href="#">Políticas de uso</a></li>
              <li><a href="#">Mapa del sitio</a></li>
            </ul>
          </div>

       <!--    <div class="small-4 large-4 columns"></div> -->
          
          <div class="small-12 medium-6 large-6 columns lista_izq_top float_right padding_top_right">
             <ul class="icon_format">
               <li ><a class="fi-social-twitter icon_format" href="#"></a></li>
               <li ><a class="fi-social-facebook icon_format" href="#"></a></li>
               <li ><a class="fi-social-instagram icon_format" href="#"></a></li>
             </ul>

          </div>

        </div>

      </div>
    </div>


<div id="cont_head"><!--Head con logo-->

   <div class="row ">

     <div class="large-6 medium-6 small-12 columns reset"> 
	       <div id="logo_y_form" class="large-12  medium-12 small-12 columns reset">
	         <img data-interchange="[<?php bloginfo('template_directory');?>/img/logo_s.png, (small)], [<?php bloginfo('template_directory');?>/img/logo_m.png, (medium)],[<?php bloginfo('template_directory');?>/img/default.png, (large)]">
	       </div>
        </div>
        
        <div class="hide-for-small">
          <div class="large-6 medium-6 small-6 columns hide-for-small">
            <div class="lista_head">
            <ul class="">
               <li><i class="fi-mail size_icon paddig_icon"></i>info@autocristalecolombia.com</li>
               <li ><i class="fi-telephone size_icon paddig_icon"></i>+58 253-23-23</li>
             </ul> 
          </div>
          </div>
        </div>
      </div>
</div>

<div class="contenedor">
  <div class="row ">
   <div class="large-2 medium-2 columns  hide-for-small reset">
    <div id="inicio_link">
      <ul id="" class="">
        <li><a href="index.php" class="fi-home tm"></a></li>
     </ul>   
    </div>
</div>

<div class="large-10 medium-10 columns reset"><!-- MENU HIDE -->
 
 <div class="off-canvas-wrap show-for-small-only" >

  <nav class="top-bar bg_amarillo" data-topbar role="navigation">
	  <ul class="title-area bg_amarillo mi_tb">
	    <li class="name">
	      <h1><a href="index.php"><i class="fi-home tm"> </i></a></h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar  bg_amarillo mi_tb"><a href="#"><i class="fi-list tm"> </i></a></li>
	  </ul>

  <section class="top-bar-section bg_amarillo mi_tb">
    <!-- Right Nav Section -->
    <ul class="right bg_rojo mi_tb">
      <li class="bg_amarillo mi_tb"><a href="about.php"><i class="fi-torsos-all tm"> </i>NOSOTRTOS</a></li>
        <li class="bg_amarillo mi_tb"><a href="contac.php"><i class="fi-address-book tm"> </i>CONTACTO</a></li>
      
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li class="bg_amarillo mi_tb"><a href="#"><i class="fi-download tm"> </i>DESCARGAS</a></li>
    </ul>
  </section>
 </nav>
</div>

<div class="menu_principal large-12 columns hide-for-small">
	<div id="access" role="navigation" class="contiene_mp">
      <?php wp_nav_menu( array( 'container_class' => 'menu-header','theme_location' => 'primary' ) );?>
    </div>

</div>

  </div>
 </div>
</div>



<div class="contenedor">
  <div class="row">
    
<hr>
    
  <ul class="sexample-orbit" data-orbit>
    <li>
      <img src="<?php bloginfo('template_directory');?>/img/slider/150-Reportes.jpg" alt="slide 1" />
      <div class="orbit-caption">
        Caption One.
      </div>
    </li>
    <li class="active">
      <img src="<?php bloginfo('template_directory');?>/img/slider/img01.png" alt="slide 2" />
      <div class="orbit-caption">
        Caption Two.
      </div>
    </li>
    <li>
      <img src="<?php bloginfo('template_directory');?>/img/slider/personal.png" alt="slide 3" />
      <div class="orbit-caption">
        Caption Three.
      </div>
    </li>
  </ul>
  
  </div>
</div>




<!-- =========BUSQUEDA========= -->

<div class="contenedor">
 <div class="row">
    <div class="medium-4 small-4 columns reset">
      <div class="etiqueta">
         PRODUCTOS
       </div>
    </div>
		

        <?php get_search_form();?>

 
   
   </div>
</div>

<!-- =====FIN BUSQUEDA========== -->



<div id="main">

