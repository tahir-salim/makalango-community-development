<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $third_section = get_field('third_section');?>
<?php $fourth_section = get_field('fourth_section');?>
<?php $fifth_section = get_field('fifth_section');?>



<?php get_header(); ?>
<section class="mainBanner" style="background-image:url(<?php echo $banner_section['image'];?>); ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInDown">
                <div class="mb-cnt">
                    <h1><?php echo $banner_section['heading'];?></h1>
                    <p><?php echo $banner_section['content'];?></p>
                    <a href="<?php echo $banner_section['b_link'];?>"
                        class="theme-btn"><?php echo $banner_section['b_text'];?></a>
                    <a href="<?php echo $banner_section['b_link_2'];?>"
                        class="theme-btn"><?php echo $banner_section['b_text_2'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-one spad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="s1-cnt">
                    <h6 class="sub-head"><?php echo $first_section['heading'];?></h6>
                    <p><?php echo $first_section['content'];?></p>
                    <a href="<?php echo $first_section['b_link'];?>"
                        class="theme-btn"><?php echo $first_section['b_text'];?></a>
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
<!-- <?php get_template_part("includes/mission-statement-incl"); ?> -->

<section class="sec-three spad">
    <div class="container">
        <div class="sec3Rw">
            <div class="row align-items-end">
                <div class="col-md-8 wow fadeInLeft">
                    <h6 class="sub-head"><?php echo $third_section['heading'];?></h6>
                    <h2 class="main-head"><?php echo $third_section['sub_heading'];?></h2>
                </div>
                <div class="col-md-4 text-end wow fadeInRight">
                    <a href="<?php echo $third_section['b_link'];?>"
                        class="theme-btn"><?php echo $third_section['b_text'];?></a>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-6 wow zoomIn">
                <figure><img src="<?php echo $third_section['image'];?>" alt=""></figure>
            </div>
            <div class="col-md-6 wow zoomIn">
                <div class="s3Box">
                    <h5><?php echo $third_section['heading_2'];?></h5>
                    <p><?php echo $third_section['content'];?></p>
                    <a href="<?php echo $third_section['b_link_2'];?>"
                        class="theme-btn"><?php echo $third_section['b_text_2'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-four" style="background-image: url(<?php echo $fourth_section['image'];?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 wow fadeInLeft">
                <div class="s4-cnt">
                    <h6 class="sub-head"><?php echo $fourth_section['heading'];?></h6>
                    <h2 class="main-head"><?php echo $fourth_section['sub_heading'];?></h2>
                    <p><?php echo $fourth_section['content'];?></p>
                    <a href="<?php echo $fourth_section['b_link'];?>"
                        class="theme-btn"><?php echo $fourth_section['b_text'];?></a>
                </div>
            </div>
            <div class="col-md-6 wow zoomIn">
                <figure><img src="<?php echo $fourth_section['image_2'];?>" alt=""></figure>
            </div>
        </div>
        <div class="s4BtmRw">
            <div class="row justify-content-center gy-4">
                <?php $box_list = $fourth_section['box_list'];?>
                <?php $x=1; foreach ($box_list as $boxlist) {?>
                <div class="col-md-4 wow bounceIn">
                    <div class="s4Box">
                        <figure><img src="<?php echo $boxlist['image']; ?>" alt=""></figure>
                        <figcaption>
                            <h4><a href="<?php echo $boxlist['link']; ?>"><?php echo $boxlist['heading']; ?></a></h4>
                        </figcaption>
                    </div>
                </div>
                <?php $x++;}?>
            </div>
        </div>
    </div>
</section>
<section class="sec-five spad">
    <div class="container">
        <div class="sec-title text-center wow fadeInDown">
            <h6 class="sub-head"><?php echo $fifth_section['heading'];?></h6>
            <h2 class="main-head"><?php echo $fifth_section['sub_heading'];?></h2>
        </div>
        <div class="row">
            <div class="member-slider">                
                <?php $box_list = $fifth_section['box_list'];?>
                <?php $x=1; foreach ($box_list as $boxlist) {?>
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
                <?php $x++;}?>
            </div>
            <div class="col-md-12 mt-5 text-center">
                <a href="<?php echo $fifth_section['b_link'];?>" class="theme-btn"><?php echo $fifth_section['b_text'];?></a>
            </div>
        </div>
    </div>
</section>
<?php get_template_part("includes/s6-cta-incl"); ?>
<?php get_footer(); ?>