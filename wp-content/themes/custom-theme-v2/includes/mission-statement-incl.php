<?php $second_section = get_field('second_section',11);?>

<section class="sec-two" style="background-image: url(<?php echo $second_section['image'];?>);">
    <div class="container">
        <div class="row gy-5">
            <div class="col-md-6 wow fadeInLeft">
                <figure><img src="<?php echo $second_section['image_2'];?>" alt=""></figure>
            </div>

            <?php $box_list = $second_section['box_list'];?>
            <?php $x=1; foreach ($box_list as $boxlist) {?>

            <?php if ($x==1) {?>
            <div class="col-md-6 wow fadeInRight">
                <div class="s2-cnt">
                    <h2 class="main-head text-white"><?php echo $boxlist['heading']; ?></h2>
                    <p><?php echo $boxlist['content']; ?></p>
                    <a href="<?php echo $boxlist['b_link']; ?>" class="theme-btn"><?php echo $boxlist['b_text']; ?></a>
                </div>
            </div>
            <?php }else {?>
            <div class="col-md-4 wow fadeInRight">
                <div class="addit-cnt">
                    <h2 class="main-head"><?php echo $boxlist['heading']; ?></h2>
                    <p><?php echo $boxlist['content']; ?></p>
                </div>
            </div>
            <?php } $x++;}?>
        </div>
    </div>
</section>