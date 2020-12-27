<?php get_header(); ?> 
<!-- phần nội dung trang chủ -->
<main id="main-content">

    <!-- phần thứ 1, slider  -->
    <section id="home-slider">
        <div class="container">
        <?php echo do_shortcode('[metaslider id="34"]'); ?>
        </div>
    </section>
    <!-- Phần thứ 2, image PR -->
    <div class="container">
        <div class="image-pr">
            <?php echo do_shortcode('[image-caption-hover id="1"]');?>
        </div>
    </div>
</main>
<?php
    // include footer
    get_footer();
?>