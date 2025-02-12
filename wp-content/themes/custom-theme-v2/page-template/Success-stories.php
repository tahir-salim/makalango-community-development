<?php /** * Template Name: Success Stories Template */ ?>
<?php $first_section = get_field('first_section');?>

<?php get_header(); ?>
<section class="sec-three suc-str-sec spad">
    <div class="container">
        <div class="sec3Rw">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <h6 class="sub-head"><?php echo $first_section['heading'];?></h6>
                    <h2 class="main-head"><?php echo $first_section['sub_heading'];?></h2>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <?php    $x=1;  $args = array( 'post_type' => 'storie' , 'posts_per_page' => '-1','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
            <div class="col-md-4">
                <div class="s3Box <?php if ($x==2) {echo 'orange';}?>">
                    <h5><?php the_title() ;?></h5>
                    <p><?php the_excerpt() ;?></p>
                    <a href="#" class="theme-btn">read more</a>
                </div>
            </div>
            <?php $x++; endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>
<?php get_template_part("includes/s6-cta-incl"); ?>
<?php get_footer(); ?>