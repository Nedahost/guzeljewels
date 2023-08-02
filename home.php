<?php get_header(); ?>
<div class="wrapper"><!-- wrapper start -->
    <div class="outerslider"><!-- outer slider start -->
        <div class="sliderimages"><!-- slider images start -->
            <figure><!-- figure start -->
                <a href="https://www.guzeljewels.gr/?product_cat=daxtilidia">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/daxtilidi.png" />
                </a>
            </figure><!-- figure end -->
            <figure><!-- figure start -->
                <a href="https://www.guzeljewels.gr/?product_cat=skoularikia">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/skoularikia.png" />
                </a>
            </figure><!-- figure end -->
        </div><!-- slider images end -->
        
        <div class="slidercontent"><!-- slider content start -->
            <h2>Embellish yourself</h2>
            <p>It’s time to shine</p>
        </div><!-- slider content end -->
        <div class="topbuttons"><!-- top buttons start -->
            <div class="buttons"><!-- buttons start -->
                <a href="https://www.guzeljewels.gr/?product_cat=daxtilidia" class="buttonstyle">
                    <i>Αγόρασε δαχτυλίδια</i>
                </a>
            </div><!-- buttons end -->
            <div class="buttons"><!-- buttons start -->
                <a href="https://www.guzeljewels.gr/?product_cat=skoularikia" class="buttonstyle">
                    <i>Αγόρασε σκουλαρίκια</i>
                </a>
            </div><!-- buttons end -->
        </div><!-- top buttons end -->
    </div><!-- outer slider end -->
</div><!-- wrapper end -->
<div class="carouseltitle"> <!-- carousel title start -->
    Most wanted 
</div><!-- carousel title end -->
<div class="outercarousel"><!-- outer carousel start -->

    <div class="wrapper"><!-- wrapper start -->
        <div class="carousel"><!-- carousel start -->
            <?php
                $meta_query  = WC()->query->get_meta_query();
                $tax_query   = WC()->query->get_tax_query();
                $tax_query[] = array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN',
                );

                $args = array(
                    'post_type'           => 'product',
                    'post_status'         => 'publish',
                    'posts_per_page'      => 12,
                    'meta_query'          => $meta_query,
                    'tax_query'           => $tax_query,
                );
                $wc_query = new WP_Query( $args );
                if ($wc_query->have_posts()) : ?>
            <ul>
            <?php while ($wc_query->have_posts()) : $wc_query->the_post();  ?>
                <li>
                    <figure>
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            $attr = array(
                                    // 'itemprop' => 'image'
                            );
                            $thumb = get_the_post_thumbnail($loop->ID, $attr);
                            echo $thumb;
                            ?>
                        </a> 
                    </figure>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <div class="homeprice"><!-- home price start -->
                        <?php 
                         global $post, $product;
                        echo $product->get_regular_price() .' &euro;'; 
                        $product->get_sale_price();
                        $product->get_price();
                        ?>
                    </div><!-- home price end -->
                </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
            </ul>
            <?php endif; ?>
        </div><!-- carousel end -->
    </div><!-- wrapper end -->
</div><!-- outer carousel end -->
<div class="wrapper"><!-- wrapper srart -->
    <div class="buttons outerbuttons"><!-- buttons start -->
        <a href="" class="buttonstyle">
            Αγόρασε ασήμι
        </a>
    </div><!-- buttons end -->
    <div class="topcategories"><!-- top categories start -->
        <ul>
            <li>
                <figure>
                    <a href="https://www.guzeljewels.gr/?product_cat=skoularikia">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/07.jpg" />
                    </a>
                </figure>
                <h3>
                    <a href="https://www.guzeljewels.gr/?product_cat=skoularikia">
                        Σκουλαρίκια
                    </a>
                </h3>
                <span>
                    <a href="https://www.guzeljewels.gr/?product_cat=skoularikia">
                        Αγόρασε τώρα &raquo;
                    </a>
                </span>
            </li>
            <li>
                <figure>
                    <a href="https://www.guzeljewels.gr/?product_cat=daxtilidia">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/06.jpg" />
                    </a>
                </figure>
                <h3>
                    <a href="https://www.guzeljewels.gr/?product_cat=daxtilidia">
                        Δαχτυλίδια
                    </a>
                </h3>
                <span>
                    <a href="https://www.guzeljewels.gr/?product_cat=daxtilidia">
                        Αγόρασε τώρα &raquo;
                    </a>
                </span>
            </li>
            <li>
                <figure>
                    <a href="https://www.guzeljewels.gr/?product_cat=kolie">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/05.jpg" />
                    </a>
                </figure>
                <h3>
                    <a href="https://www.guzeljewels.gr/?product_cat=kolie">
                        Κολιέ
                    </a>
                </h3>
                <span>
                    <a href="https://www.guzeljewels.gr/?product_cat=kolie">
                        Αγόρασε τώρα &raquo;
                    </a>
                </span>
            </li>
        </ul>
    </div><!-- top categories end -->

    <div class="homegifts"><!-- home gifts start -->
        <figure>
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/4.jpg" />
            </a>
        </figure>
        <div class="giftscontent"><!-- gifts content start -->
            <h4>
                Special gifts for her
            </h4>
            <p>
                Κοσμήματα που θα κάνουν κάθε περίσταση ξεχωστή.
            </p>
            <span>
                <a href="" class="buttonstyle">
                    Αγόρασε τώρα &raquo;
                </a>
            </span>
        </div><!-- gifts content end -->
    </div><!-- home gifts end -->
</div><!-- wrapper end -->
<?php get_footer();