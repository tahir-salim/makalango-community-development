<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php $fifth_section = get_field('fifth_section',11);?>


<?php get_header(); ?>

<!-- banner-end -->
<section class="sec-one spad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="s1-cnt">
                    <h6 class="sub-head"><?php echo $first_section['heading'];?></h6>
                    <?php echo $first_section['content'];?>
                </div>
            </div>
            <div class="col-md-6 wow zoomIn">
                <figure>
                    <img src="<?php echo $first_section['image'];?>" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>
<div class="mission-abt">
    <?php get_template_part("includes/mission-statement-incl"); ?>
</div>
<section class="sec-five spad">
    <div class="container">
        <div class="sec-title text-center wow fadeInDown">
            <h6 class="sub-head"><?php echo $fifth_section['heading'];?></h6>
            <h2 class="main-head"><?php echo $fifth_section['sub_heading'];?></h2>
        </div>
        <div class="row gy-4">
            <?php $box_list = $fifth_section['box_list'];?>
            <?php $x=1; foreach ($box_list as $boxlist) {?>
            <div class="col-md-3 text-center wow zoomIn">
                <div class="team-Box">
                    <figure>
                        <img src="<?php echo $boxlist['image']; ?>" alt="">
                        <div class="teamInfo">
                            <span><?php echo $boxlist['heading']; ?></span>
                            <h5><?php echo $boxlist['sub_heading']; ?></h5>
                            <ul class="social-icons">
                                <li><a href="<?php echo $boxlist['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?php echo $boxlist['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo $boxlist['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <?php $x++;}?>
        </div>
    </div>
</section>

<?php get_template_part("includes/s6-cta-incl"); ?>
<?php get_template_part("includes/s7-news-incl"); ?>
<?php get_footer(); ?>