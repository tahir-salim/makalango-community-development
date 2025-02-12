<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 text-start">
                        <a href="<?php echo site_url();?>" class="logo">
                            <img src="<?php echo $options['logo'];?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="main-top-hdr">
                            <div class="cta-hdr-wrap">
                                <div class="cta-box">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/phone.png"
                                        alt="">
                                    <div>
                                        <b>call now</b>
                                        <a
                                            href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                                    </div>
                                </div>
                                <div class="cta-box">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/mail.png" alt="">
                                    <div>
                                        <b>email us</b>
                                        <a
                                            href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="donate-btn flex-shrink-0">
                                <a href="#" class="theme-btn">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="menuWrap">
                            <!-- <ul class="menu">
                                <li class="active"><a href="./">Home</a></li>
                                <li><a href="about-us.php">about us</a></li>
                                <li><a href="success-stories.php">success stories</a></li>
                                <li><a href="annual-meeting.php">annual meeting</a></li>
                                <li><a href="blogs.php">blogs</a></li>
                                <li><a href="contact-us.php">contact</a></li>
                            </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>

        <?php if(is_home() || is_front_page() ){?>


        <?php } else{?>

        <?php $banner_section = get_field('banner_section'); ?>

        <section class="mainBanner innerBanner" style="background-image:url(<?php echo $banner_section['image'];?>); ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInDown">
                        <div class="mb-cnt">
                            <h1><?php echo $banner_section['heading'];?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php }?>