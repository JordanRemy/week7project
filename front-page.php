<?php get_header(); ?>

<?php $bgImage = get_field('background_image');?>
<header class="hero" style="background-image:url(<?php echo $bgImage['url']; ?>)">
    <nav class="main-nav">
        <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
        )); ?>
    </nav>
    <div class="header-content">
        <div class="logo-wrapper">
            <?php $headerLogo = get_field('logo'); ?>
            <img src="<?php echo $headerLogo['url'] ?>" alt="<?php echo $headerLogo['alt'] ?>"/>
        </div>
        <h1><?php the_field('tagline_text'); ?></h1> 
        <div class="black-container wrapper-2">
            <h2><?php the_field('info_box_header'); ?></h2>
            <p><?php the_field('info_box_description'); ?></p>
            <div class="cta-wrapper">
                <a href="<?php the_field('cta_link'); ?>" target="_blank"><?php the_field('info_box_cta'); ?><img src="images/arrow.png" alt=""></a>
            </div>
        </div>
    </div>
</header>

<section class="service-menu">
    <div class="wrapper">
        <nav class="secondary-nav">
            <?php wp_nav_menu( array(
                'container' => false,
                'theme_location' => 'secondary'
            )); ?>
        </nav>

        <div class="right-hand-menu">
            <?php while (have_posts() ) : the_post(); ?>
                <?php if(have_rows('service_group')): ?>
                    <?php while(have_rows('service_group')): the_row(); ?>
                        <h2 class="group-title"><?php the_sub_field('group_title')?></h2>
                        <?php if(have_rows('service_items')): ?>
                            <?php while(have_rows('service_items')): the_row(); ?>
                                <div class="service-item">
                                    <div class="item-info">
                                        <h3><?php the_sub_field('item_title')?></h3>
                                        <h3 class="price"><?php the_sub_field('item_price')?></h3>
                                    </div>
                                    <p><?php the_sub_field('item_description') ?></p>
                                </div>    
                            <?php endwhile; ?>
                        <?php endif; ?> 
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php $mantraImage = get_field('mantra_image');?>
<section class="mantra" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $mantraImage['url']; ?>)">
    <h4><?php the_field('mantra_text'); ?></h4>
</section>

<section class="about-us">
    <div class="images">
        <?php $firstAboutImage = get_field('about_image_1'); ?>
        <div class="about-image" style="background: url(<?php echo $firstAboutImage['url']; ?>) fixed center no-repeat;">
            <h4><?php the_field('about_us_left_title'); ?></h4>
        </div>

        <?php $secondAboutImage = get_field('about_image_2'); ?>
        <div class="about-image" style="background: url(<?php echo $secondAboutImage['url']; ?>) fixed center no-repeat;">
        </div>
    </div>

    <div class="about-dark"></div>

    <div class="about-info">
        <div class="about-wrapper">
            <div class="about-main">
                <h2><?php the_field('about_us_right_sub_title'); ?></h2>
                <p><?php the_field('about_us_description'); ?></p>
            </div>

            <div class="about-social">
                <hr>
                <h2><?php the_field('social_links_header'); ?></h2>
                <h5>-</h5>
                <p><?php the_field('social_links_description') ?></p>
                <div class="social-link-container">
                    <?php while(have_rows('social')) : the_row();?>
                        <a href="<?php the_sub_field('social_link'); ?>" target="_blank">
                            <div class="social-link">
                                <i class="fa fa-<?php the_sub_field('social_platform_name'); ?>"></i>
                            </div>
                        </a>
                    <?php endwhile; ?>  
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>

<?php $ctaBgImage = get_field('cta_bg_image') ?>
<section class="call-to-action" style="background-image: url(<?php echo $ctaBgImage['url']; ?>)">
    <div class="wrapper-2">
        <div class="black-container">
            <h2><?php the_field('cta_title_bottom'); ?></h2><!-- //put after element for divider content dash -->
            <p><?php the_field('cta_description_bottom'); ?></p>
            <div class="cta-wrapper">
                <a href="<?php the_field('cta_link_bottom'); ?>" target="blank"><?php the_field('cta_text_bottom'); ?><img src="images/arrow.png" alt=""></a>
            </div>

        </div>
    </div>
</section>



    
<?php get_footer(); ?>