    </main>
    <div class="wrapper"><!-- wrapper start -->
        <div class="experiencestitle">
            Shopping experiences
        </div>
    </div><!-- wrapper end -->
    <div id="outerexperiences"><!-- outer experience start -->
        <div class="wrapper"><!-- wrapper start -->
            <ul>
                <li>
                    <h4>We deliver</h4> 
                    <span>ΔΩΡΕΑΝ ΜΕΤΑΦΟΡΙΚΑ ΑΝΩ ΤΩΝ 60&euro;</span>
                </li>
                <li>
                    <h4>
                        We go fast
                    </h4>
                    <span>
                        ΓΡΗΓΟΡΕΣ ΑΠΟΣΤΟΛΕΣ
                    </span>
                </li>
                <li>
                    <h4>
                        We go safe
                    </h4>
                    <span>
                        ΑΣΦΑΛΕΙΣ ΠΛΗΡΩΜΕΣ
                    </span>
                </li>
            </ul>
        </div><!-- wrapper end -->
    </div><!-- outer experience end -->
    <footer>
        <div class="wrapper"><!-- wrapper start -->
            <div class="footer_details">
                <section>
                    <?php dynamic_sidebar( 'Footer first' ); ?>
                </section>
                <section>
                    <?php dynamic_sidebar( 'Footer second' ); ?>
                </section>
                <section>
                    <div class="widget_nav_menu">
                        <h3>
                            Επικοινωνία
                        </h3>
                        <div>
                            <ul>
                                <li>Χρήστου Λαδά 1 , 10 561 ΑΘήνα, Ελλάδα </li>
                                <li>210 32 24 990</li>
                                <li>info@guzeljewels.gr</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="widget_nav_menu">
                        <h3 >ΑΚΟΛΟΥΘΗΣΕ ΜΑΣ</h3>
                        <div>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/Guzeljewelsofficial-110939748191283" target="_blank">
                                        FACEBOOK
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/guzeljewelsofficial/" target="_blank">
                                        INSTAGRAM
                                    </a>
                                </li>
                                <li>
                                    <a href="https://vm.tiktok.com/ZMLqH1XvY/" target="_blank">
                                        TIK TOK
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div><!-- wrapper end -->
        <div class="bankimages"><!-- bank images start -->
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ban.png" />
        </div><!-- bank images end -->
    </footer>
    <div class="powerby">
    WEB DESIGN & WEB DEVELOPMENT BY NEDAHOST
    </div>
        <?php wp_footer(); ?>
    </body>    
</html>