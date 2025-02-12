<?php /** * Template Name: Contact Us Template */ ?>
<?php $first_section = get_field('first_section');?>

<?php global $options; ?>

<?php get_header(); ?>
<!-- banner-end -->
<section class="contact-sec spad">
    <div class="container">
        <div class="contact-cta-Wrap">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="cont_cta_bx">
                        <i class="fas fa-phone"></i>
                        <div>
                            <span>Phone Number</span>
                            <b><a
                                    href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a></b>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cont_cta_bx">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <span>Email</span>
                            <b><a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="contactWrap">
                    <h6 class="sub-head">CONTACT WITH US</h6>
                    <h2 class="main-head">WRITE US A MESSAGE</h2>
                    <div class="contactform">
                    <?php echo do_shortcode('[contact-form-7 id="2ab6e10" title="Contact form 1"]');?>

                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 offset-sm-0">
                <div class="contact-content">
                    <figure><img src="assets/images/contact-1.png" alt=""></figure>
                    <h6 class="sub-head"><?php echo $first_section['heading'];?></h6>
                    <h2 class="main-head"><?php echo $first_section['sub_heading'];?></h2>
                    <p><?php echo $first_section['content'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>