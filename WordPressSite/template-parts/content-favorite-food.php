<?php 


$favorite_food_title = get_field('favorite_food_title');
$favorite_food_second_title = get_field('favorite_food_second_title');

?>


<div class="row justify-content-center" id="favorite-food"><!--favorite-food-->
        <div class="col-9 text-center mt-5">
            <h1><?php echo $favorite_food_title; ?></h1>
            <h2><?php echo $favorite_food_second_title; ?></h2>
            <div class="row justify-content-center">
                
            <?php $loop = new WP_Query(array('post_type' => 'favorite_food', 'orderbay' => 'post_id', 'order' => 'ASC')); ?>

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="col-3 mr-3">
    <div class="img-discover p-0">

    <?php
$favorite_food_image = get_field('favorite_food_image');

if( !empty($favorite_food_image) ): ?>

<img src="<?php echo $favorite_food_image['url']; ?>"  class="img-fluid" alt="">
<?php endif; ?>
       
    </div>
    <div class="discover-content text-left p-3">
      <p><?php the_field('favorite_food_item_time'); ?></p>
      <p class="title"> <?php the_field('favorite_food_title'); ?></p>
      <p><?php the_field('favorite_food_description'); ?>
            </p>
            <a class="read-more" href="<?php the_field('favorite_food_button_url'); ?>"><?php the_field('favorite_food_button_title'); ?></a>
    </div>
    
</div><!--col-3-->
<?php endwhile; wp_reset_query();  ?>



    </div><!--row-->
</div><!--col-9-->
</div><!--favorite-food---->
