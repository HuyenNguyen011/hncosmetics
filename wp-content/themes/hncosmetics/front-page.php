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
        <!-- new product -->
        <div class="new-product">
            <div class="product-blog pt-2 pb-5" style="text-align: center;">
                <h2 style="color: #ffb3a9">--------------Sản Phẩm Mới--------------</h2>
            </div>
            <!-- <?php echo do_shortcode('[tcproduct-catalog column=”tcpt-col-3″]');?> -->
            <div class="product"><?php echo do_shortcode('[products limit="4"]');?></div>
        </div>
        <!-- product best-saller -->
        <div class="best-saller">
            <div class="product-blog pt-2 pb-5" style="text-align: center;">
                <h2 style="color: #ffb3a9">--------------Sản Phẩm Bán Chạy--------------</h2>
            </div>
            <div class="best-product"><?php echo do_shortcode('[best_selling_products limit="8"]');?></div>
        </div>
    </div>
</main>
<?php
    // include footer
    get_footer();
?>