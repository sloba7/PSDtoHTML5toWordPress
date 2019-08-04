<?php
/*
Template Name: Welcome Page
*/
$form = get_field('form');


get_header();
?>

<?php get_template_part( 'template-parts/content', 'traditional-flavours' ); ?>
                
<?php get_template_part( 'template-parts/content', 'new-tastes' ); ?>

<?php get_template_part( 'template-parts/content', 'menu' ); ?>

<?php get_template_part( 'template-parts/content', 'some-div' ); ?>

<?php get_template_part( 'template-parts/content', 'new-menu' ); ?>

<div class="row" id="img-div"><!--img-div-->


</div><!--img-div-->

<div class="row justify-content-center" id="book-here"><!--book-here-->
  <?php echo $form; ?>
</div><!--book-here---->

<div class="row" id="img-div-1"><!--img-div-1-->

</div><!--img-div-1-->

    
<?php get_template_part( 'template-parts/content', 'favorite-food' ); ?>

<?php get_template_part( 'template-parts/content', 'testemonials' ); ?>


<?php
get_footer();
