<?php global $options; ?>
<?php $sixth_section = get_field('sixth_section',11);?>

<section class="sec-six" style="background-image: url(<?php echo $sixth_section['image'];?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInDown">
                <div class="s6Box">
                    <h3><?php echo $sixth_section['heading'];?>
                        <!-- Makalango village of Somalia -->
                    </h3>
                    <div class="s6-cta">
                        <img src="<?php echo $sixth_section['image_2'];?>" alt="">
                        <div>
                            <span><?php echo $sixth_section['sub_heading'];?></span>
                            <a
                                href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                        </div>
                    </div>
                    <a href="<?php echo $sixth_section['b_link'];?>"
                        class="theme-btn"><?php echo $sixth_section['b_text'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>