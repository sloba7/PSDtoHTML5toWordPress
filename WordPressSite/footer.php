<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brunch
 */

?>

<div class="row justify-content-center" id="footer"><!--footer-->
<div class="col-9 mt-5">
<div class="row mt-4 justify-content-between">
<div class="col-4">
<h1 class="mb-5">ABOUT</h1>
<p>Lorem ipsum dolor sit amet, consec
    tetur adipisicing elit, sed do eiusmod tempor incididunt ultimam quantum</p>
</div><!--col-6-->
<div class="col-6">
<div class="row">
<div class="col-4 text-center">
<h4 class="mb-3">ABOUT</h4>
<ul class="footer-list font-weight-bold">
    <li>Team</li>
    <li>Join us</li>
    <li>Ethic</li>
    <li>Goals</li>
</ul>
</div><!--col-4-->
<div class="col-4 text-center">
    <h4 class="mb-3">ABOUT</h4>
    <ul class="footer-list font-weight-bold">
        <li>Team</li>
        <li>Join us</li>
        <li>Ethic</li>
        <li>Goals</li>
    </ul>
</div><!--col-4-->
<div class="col-4 text-center">
    <h4 class="mb-3">ABOUT</h4>

	<?php 
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					 'container'     =>  'ul',
					 'container_class' => 'footer-list',
					 'menu_class' => 'meni footer-list'
				) );
                    
				?>

   
    
</div><!--col-4-->
</div><!--row-->
</div><!--col-6-->
</div><!--row-->
</div><!--col-10-->
</div><!--footer-->
</div><!--container-div-->
<?php wp_footer(); ?>
</body>
</html>
