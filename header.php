<!DOCTYPE html>
    <html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name="facebook-domain-verification" content="e8h5bhc2iuyynt0s9x73nj5r2lzfmc" />
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@0;1&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet"> 
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <base href="https://www.guzeljewels.gr/">
        <?php wp_head(); ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6R6WVC1PY"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-Y6R6WVC1PY');
        </script>

        <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1174518846484468');
  fbq('track', 'PageView');
  fbq('track', 'AddToCart');
 
  fbq('track', 'Purchase', {
    currency: 'euro',
  });

</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1174518846484468&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    </head>
    <body>
        <header>
            <div class="wrapper"><!-- wrapper start -->
                <div class="shopdetails"><!-- shop details start -->
                    <ul>
                            <?php if (is_user_logged_in() ) { ?>
                            <li class="headeraccount">
                                <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?> " title="My account" />
                                <span> Ο Λογαριασμός μου </span>
                                </a>
                            </li>
                            <li class="headerlogout">
                                <a href="<?php echo wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ); ?> " title="Logout">
                                   <span>  Αποσύνδεση </span>
                                </a>
                            </li>
                        <?php }elseif (!is_user_logged_in() ) { ?>
                            <li class="headeraccount"><a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?> " title="είσοδος">
                                    <span>  Είσοδος / Εγγραφή </span>
                                </a>
                            </li> 
                        <?php } ?>
                            <li class="headercart">
                                <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">

                                <?php echo WC()->cart->get_cart_total() . ' (' . WC()->cart->get_cart_contents_count() .')' ; ?></a>
                            </li>
                        </ul>
                </div><!-- shop details end -->
                <div id="logo"><!-- logo start -->
                    <?php
                    $header_image = get_header_image();
                    if ( ! empty( $header_image ) ) { ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" />
                    </a>
                    <?php } ?>
                </div><!-- logo end -->
                <nav>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class' => 'dropdown'
                        )
                    );
                    ?>
                </nav>
            </div><!-- wrapper end -->
        </header>
    <main>