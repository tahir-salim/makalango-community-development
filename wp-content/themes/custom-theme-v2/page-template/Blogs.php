<?php /** * Template Name: Blogs Template */ ?>
<?php $first_section = get_field('first_section');?>

<?php get_header(); ?>
<!-- banner-end -->
<section class="sec-seven ">
    <div class="container">
        <div class="sec-title text-center wow fadeInDown">
            <h6 class="sub-head"><?php echo $first_section['heading'];?></h6>
            <h2 class="main-head"><?php echo $first_section['sub_heading'];?></h2>
        </div>
        <div class="row gx-5 gy-5">
            <?php    $x=1;  $args = array( 'post_type' => 'new' , 'posts_per_page' => '6','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
            <div class="col-md-4 wow zoomIn">
                <div class="newsBox">
                    <figure>
                        <img src="<?php the_post_thumbnail_url() ;?>" alt="">
                        <span><?php echo get_the_date('d M'); ?></span>
                    </figure>
                    <figcaption>
                        <div class="cmnts-admin">
                            <span><i class="fal fa-user"></i> admin</span>
                            <span><i
                                    class="fal fa-comments"></i><?php $comments_count = wp_count_comments( get_the_ID() ); echo $comments_count->total_comments; ?></span>
                        </div>
                        <h3><a href="#"><?php the_title() ;?></a></h3>
                        <p><?php the_excerpt() ;?></p>
                    </figcaption>
                </div>
            </div>
            <?php $x++; endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>