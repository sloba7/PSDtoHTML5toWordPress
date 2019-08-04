<?php 

$new_tastes_title = get_field('new_tastes_title');
$new_tastes_description = get_field('new_tastes_description');
$new_spices_title = get_field('new_spices_title');
$new_spices_description = get_field('new_spices_description');
$new_dishes_title = get_field('new_dishes_title');
$new_dishes_description = get_field('new_dishes_description');

?>



<div class="row pt-5 justify-content-center" id="new-tastes"><!--new-tastes-->
        <div class="col-8 pt-4">
            <div class="row">
               <div class="col-4">
                  <div class="circle"></div>
                  <h2><?php echo $new_tastes_title; ?></h2>
                  <p><?php echo $new_tastes_description; ?></p>
               </div><!--col-4-->
               <div class="col-4">
                      <div class="circle"></div>
                      <div class="circle"></div>
                      <h2><?php echo $new_spices_title; ?></h2>
                      <p><?php echo $new_spices_description; ?></p>
               </div><!--col-4-->
               <div class="col-4">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <h2><?php echo $new_dishes_title; ?></h2>
                    <p><?php echo $new_dishes_description; ?></p>

               </div><!--col-4-->
               </div><!--row-->
        </div><!--col-8-->
</div><!--new-tastes---->