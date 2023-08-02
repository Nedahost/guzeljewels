<?php get_header();  ?>

<?php if(!is_product()){ ?>
<div class="wrapper"><!-- wrapper start -->
    <section id="outerimageeshop"><!-- outerslider start -->
        <h1 class="page-title">
            <i> <?php woocommerce_page_title(); ?></i>
        </h1>
        <div class="wrapper">
            <?php do_action('woocommerce_archive_description'); ?>
        </div>
    </section><!-- outerslider end -->
</div><!-- wrapper end -->
<?php } ?>

<?php if(!is_home()){ ?>
    <div class="outerbreadcrumb"><!-- outer breadcrumb start -->
        <div class="wrapper"><!-- wrapper start -->
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div><!-- wrapper end -->
    </div><!-- outer breadcrumb end -->
<?php } ?>
<div class="woocommerce"><!-- woocommerce start -->
    
    <?php
    if (have_posts()) : if (is_singular('product')) {
            woocommerce_content();
        } else {

            woocommerce_get_template('archive-product.php');
        }
    endif;
    ?>
   
</div><!-- woocommerce end -->
<?php get_footer();