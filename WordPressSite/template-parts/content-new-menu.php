<?php 

$new_menu_primary_title = get_field('new_menu_primary_title');
$new_menu_secondary_title = get_field('new_menu_secondary_title');

?>



    <div class="row" id="new-menu"><!--new-menu-->
        <div class="col-12">
<h1 class="text-center"><?php echo $new_menu_primary_title; ?></h1>
<h2 class="text-center"><?php echo $new_menu_secondary_title; ?></h2>
<div class="row justify-content-center">
<div class="row"></div>
<div class="row row-change justify-content-between">
<div class="col-4 float-left">
<ul class="new-menu-list">
<?php $loop = new WP_Query(array('post_type' => 'new_menu_left_item', 'orderbay' => 'post_id', 'order' => 'ASC')); ?>

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
    <li>
   

<?php
$new_menu_item_left_image = get_field('new_menu_item_left_image');

if( !empty($new_menu_item_left_image) ): ?>

<img src="<?php echo $new_menu_item_left_image['url']; ?>" alt="">
<?php endif; ?>
<h4><?php the_field('new_menu_item_left_title'); ?></h4>
        <p><?php the_field('new_menu_item_left_descriptions'); ?> <b><?php the_field('new_menu_item_left_price'); ?></b>
            </p>
            <?php endwhile;  ?>
    </li>
   
</ul>

</div><!--col-4-->
<div class="col-4   float-right">
    <ul class="new-menu-list">
    <?php $loop = new WP_Query(array('post_type' => 'new_menu_right_item', 'orderbay' => 'post_id', 'order' => 'ASC')); ?>

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
    <li>
   

<?php
$new_menu_item_right_image = get_field('new_menu_item_right_image');

if( !empty($new_menu_item_right_image) ): ?>

<img src="<?php echo $new_menu_item_right_image['url']; ?>" alt="">
<?php endif; ?>
<h4><?php the_field('new_menu_item_right_title'); ?></h4>
        <p><?php the_field('new_menu_item_right_descriptions'); ?> <b><?php the_field('new_menu_item_right_price'); ?></b>
            </p>
            <?php endwhile; wp_reset_query(); ?>
    </li>
    </ul>
    
</div><!--col-4-->
</div><!--row-->
</div>
</div><!--col-12-->
</div><!--new-menu-->