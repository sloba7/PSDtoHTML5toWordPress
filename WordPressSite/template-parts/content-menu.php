<?php 

$menu_main_title = get_field('menu_main_title');
$menu_second_title = get_field('menu_second_title');


?>
    
    
    
    
    <div class="row justify-content-center" id="menu"><!--menu-->
        <div class="col-8 menu-content  pt-5">
            <h1 class="text-center"><?php echo $menu_main_title; ?></h1>
            <h2 class="text-center"><?php echo $menu_second_title; ?></h2>
            <div class="row">

 <?php $loop = new WP_Query(array('post_type' => 'menu_item', 'orderbay' => 'post_id', 'order' => 'ASC')); ?>

           <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-3 mt-2">
              
            <?php 

$image = get_field('menu_item_image');

if( !empty($image) ): ?>

    <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
        </div><!--col-3-->
                <div class="col-3 text-center text">
                    <h5 class=""><?php the_field('menu_item_title'); ?></h5>
                    <p><?php the_field('menu_item_description'); ?></p>
                            <p class="price"><?php the_field('menu_item_price'); ?></p>

                </div><!--col-3-->

<?php endwhile; wp_reset_query(); ?>
</div><!--row-->
 </div><!--col-8-->
    </div><!--menu-->