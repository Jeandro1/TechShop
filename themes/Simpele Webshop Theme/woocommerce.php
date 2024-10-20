<?php get_header(); ?>

<?php

while(have_posts()){
    woocommerce_content();
}; 

?>

<?php get_footer(); ?>
