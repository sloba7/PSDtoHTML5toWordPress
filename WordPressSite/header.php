<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brunch
 */
//Custom Field 

$read_more = get_post_meta( 12, 'read_more', true );
$read_more_text = get_post_meta( 12, 'read_more_text', true );



?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/Assets/css/bootstrap.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'restoran' ); ?></a>

	<div class="container-fluid"> <!--Container-div-->
    <div class="row" id="header"><!--header-->
   <div class="col-12 header">

        <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">BRUNCH</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
				</button>
				<?php 
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					 'container'     =>  'nav',
					 'container_class' => 'navbar navbar-expand-lg navbar-light',
					 'menu_class' => 'navbar-nav ml-auto'
				) );
                    
				?>

              </nav> 
<div class=" center-content d-flex justify-content-center"> <!--d-flex-->
    <div class="col-6">
<h1 class="text-center"><?php bloginfo('name'); ?> </h1>
<h2 class="text-center"><?php bloginfo('description'); ?> </h2>
<a href="<?php echo $read_more; ?>" class="text-center"><?php echo $read_more_text; ?></a>
    </div>
</div><!--d-flex--->
   </div><!--col-12-->
    </div><!--header-->
