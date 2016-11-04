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
        <div class="sub-header">
            <h2><?php the_field('info_box_header'); ?></h2>
            <p><?php the_field('info_box_description'); ?></p>
            <div class="btn-wrapper">
                <a href="<?php the_field('cta_link'); ?>" target="_blank"><?php the_field('info_box_cta'); ?></a>
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
            <div class="menu-item">
                <h2>Starters</h2>
                <div class="item-info">
                    <h3>Rice &amp; Corn Frituras</h3>
                    <h3 class="price">19.25</h3>
                </div>
                <p>California brown rice, sweet corn, etc, etc, etc, ingredients, etc, stuff, etc.</p>

                <h2>Main Dishes</h2>

            </div>
        </div>
    </div>
</section>

<?php $mantraImage = get_field('mantra_image');?>
<section class="mantra" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $mantraImage['url']; ?>)">
    <h4><?php the_field('mantra_text'); ?></h4>
</section>


<section class="about-us clearfix">
    <?php $firstAboutImage = get_field('about_image_1'); ?>
    <div class="about-img" style="background: url(<?php echo $firstAboutImage['url']; ?>) fixed center no-repeat;">
        <h4><?php the_field('about_us_left_title'); ?></h4>
        <div class="about-content">
            <h2><?php the_field('about_us_right_sub_title'); ?></h2>
            <p><?php the_field('about_us_description'); ?></p>
        </div>
    </div>
    
    <?php $secondAboutImage = get_field('about_image_2'); ?>
    <div class="about-img" style="background: url(<?php echo $secondAboutImage['url']; ?>) fixed center no-repeat;">
        <div class="about-content">
            <hr>
            <h2><?php the_field('social_links_header'); ?></h2><!-- //put after element for divider content dash -->
            <p><?php the_field('social_links_description') ?></p>
            <hr>

            <?php while(have_rows('social')) : the_row();?>
                <div class="social-link">
                    <a href="<?php the_sub_field('social_link'); ?>">
                        <i class="fa fa-<?php the_sub_field('social_platform_name'); ?>"></i>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php $ctaBgImage = get_field('cta_bg_image') ?>
<section class="call-to-action" style="background-image: url(<?php echo $ctaBgImage['url']; ?>)">
    <div class="wrapper">
        <h2><?php the_field('cta_title_bottom'); ?></h2><!-- //put after element for divider content dash -->
        <p><?php the_field('cta_description_bottom'); ?></p>
        <a href="<?php the_field('cta_link_bottom'); ?>" target="blank"><?php the_field('cta_text_bottom'); ?></a>
    </div>
</section>



    
<?php get_footer(); ?>