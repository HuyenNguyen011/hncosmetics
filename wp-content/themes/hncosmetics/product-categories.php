<?php
/*
* Template Name: Product Categories
*/
get_header(); ?> 
<div class="container">
<!-- get product by category - face -->
<h3>Mặt</h3>
<?php echo do_shortcode('[products columns="4" category="face"]');?> 
<!-- get product by category - eyes -->
<h3>Mắt</h3>
<?php echo do_shortcode('[products columns="4" category="eyes"]');?> 
<!-- get product by category - lips -->
<h3>Môi</h3>
<?php echo do_shortcode('[products columns="4" category="lips"]');?> 
<!-- get product by category - accessories -->
<h3>Phụ kiện</h3>
<?php echo do_shortcode('[products columns="4" category="accessories"]');?> 
</div>

<?php
    // include footer
    get_footer();
?>