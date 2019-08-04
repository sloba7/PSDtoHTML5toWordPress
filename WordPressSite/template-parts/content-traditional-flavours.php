<?php 
$traditional_flavours_title = get_field('traditional-flavours-title');
$traditional_flavours_text = get_field('traditional-flavours-text');
$traditional_flavours_image = get_field('traditional-flavours-image');


?>



<div class="row justify-content-center" id="traditional-flavours"><!--traditional-flavours-->
        <div class="col-9"><!--col-12-->
            <div class="row mt-5">
                <div class="col-6 mt-4 traditional-text  text-white">
                  <h1><?php echo $traditional_flavours_title; ?></h1>
                  <p>
                     <?php echo $traditional_flavours_text; ?>
                  </p>
                </div><!--col-6-->
                <div class="col-6 mt-4">
                 <!-- IF traditional-flavours-image exists -->
                                

<img src="<?php echo $traditional_flavours_image; ?>" class="img-fluid w-100" alt="<?php echo $traditional_flavours_image['alt']; ?>" >
</div><!----col-6-->
            </div><!--row-->
        </div><!--col-12-->
    </div><!--traditional-flavours---->