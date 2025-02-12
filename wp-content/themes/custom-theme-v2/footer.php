<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget">
                    <h4>Navigate</h4>
                    <!-- <ul class="ft-nav">
                        <li><a href="./">home</a></li>
                        <li><a href="success-stories.php">success stories</a></li>
                        <li><a href="annual-meeting.php">annual meeting</a></li>
                        <li><a href="blogs.php">blogs</a></li>
                        <li><a href="contact-us.php">contact</a></li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu 1', 'menu_class'=> 'ft-nav' ) ); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h4>Other Pages</h4>
                    <!-- <ul class="ft-nav">
                        <li><a href="#">privacy & policy</a></li>
                        <li><a href="#">terms of use</a></li>
                        <li><a href="#">Donation</a></li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu 2', 'menu_class'=> 'ft-nav' ) ); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h4>Contact Info</h4>
                    <ul class="ft-cta">
                        <li><i class="fas fa-phone"></i> <a href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h4>subscribe</h4>
                    <div class="ft-newsltr">
                    <?php echo do_shortcode('[email-subscribers-form id="1"]');?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <a href="<?php echo site_url();?>" class="logo">
                    <img src="<?php echo $options['logo'];?>" alt="">
                </a>
            </div>
            <div class="col-md-6 text-end">
                <ul class="ft-social">
                    <li><a href="<?php echo $options['facebook'];?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="<?php echo $options['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</main>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>
<script>
new WOW().init();
</script>
</body>

</html>