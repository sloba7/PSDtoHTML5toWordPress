<?php

$some_div_title = get_field('some_div_title');
$some_div_description = get_field('some_div_description');




?>
<div class="row justify-content-center" id="some-div"><!--some-div-->
          <div class="col-6 text-center">
               <h1><?php echo $some_div_title; ?></h1>
               <p> <?php echo $some_div_description; ?></p>
               <div class="circle"></div>
               <div class="circle"></div>
               <div class="circle"></div>
               <ul>
                   <li>Meals</li>
                   <li>Spices</li>
                   <li>Book</li>
                   <li>Gallery</li>
               </ul>
          </div><!--col-6-->
    </div><!--some-div---->