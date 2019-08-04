<?php

$testemonial_title = get_field('testemonial_title');
$testemonial_text = get_field('testemonial_text');
$testemonial_user = get_field('testemonial_user');



?>
<div class="row text-white justify-content-center" id="testemonials"><!--testemonials-->
<div class="col-7 mt-5 text-center">
<h1><?php echo $testemonial_title; ?></h1>
<p><?php echo $testemonial_text; ?> </p>
<h5><?php echo $testemonial_user; ?></h5>
<ul class="social">
    <li><img src="<?php bloginfo('stylesheet_directory'); ?>/Assets/img/facebook.png" alt=""></li>
    <li><img src="<?php bloginfo('stylesheet_directory'); ?>/Assets/img/twitter.png" alt=""></li>
    <li><img src="<?php bloginfo('stylesheet_directory'); ?>/Assets/img/instagram.png" alt=""></li>
    <li><img src="<?php bloginfo('stylesheet_directory'); ?>/Assets/img/pinterest.png" alt=""></li>
    <li><img src="<?php bloginfo('stylesheet_directory'); ?>/Assets/img/google+.png" alt=""></li>
</ul>
</div><!--col-8-->
</div><!--testemonials---->