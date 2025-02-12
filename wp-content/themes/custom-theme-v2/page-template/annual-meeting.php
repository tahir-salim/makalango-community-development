<?php /** * Template Name: Annual Meeting Template */ ?>
<?php $fourth_section = get_field('fourth_section',11);?>

<?php get_header(); ?>
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
<div class="cta-gap">
    <?php get_template_part("includes/s6-cta-incl"); ?>
</div>
<?php get_footer(); ?>