<?php get_header(); ?>

<?php $contactbgImage = get_field('contact_background_image');?>
<header class="secondary hero" style="background-image:url(<?php echo $contactbgImage['url']; ?>)">
    <nav class="main-nav">
        <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
        )); ?>
    </nav>
    <div class="header-content">
        <h1><?php the_field('contact_header_text'); ?></h1> 
    </div>
</header>

<section class="contact">
	
	<div class="wrapper">
		<h2 class="sub-head"><?php the_field('page_sub_heading') ?></h2>
		<?php while(have_rows('location')) : the_row();?>
			<div class="contact-container">
				<div class="img-wrapper">
					<?php $mapImage = get_sub_field('map_image') ?>
					<img src="<?php echo $mapImage['url']; ?>" alt="">
				</div>
				<div class="contact-info">
					<h2><?php the_sub_field('location_street'); ?></h2>
					<h3><?php the_sub_field('location_city'); ?></h3>
					<div class="contact-specific">
						<p><?php the_sub_field('phone_number'); ?></p> <!-- phonenumber -->
						<p><?php the_sub_field('email'); ?></p> <!-- email -->
					</div>
					<div class="contact-hours">
						<p><?php the_sub_field('hours'); ?></p> <!-- hours -->
						<p><?php the_sub_field('weekend_hours'); ?></p> <!-- weekend hours -->
					</div>
				</div>
				<!-- <hr> -->
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php $mantraImage = get_field('mantra_image',get_option('page_for_posts'));?>
<section class="secondary mantra" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $mantraImage['url']; ?>)">
    <h4><?php the_field('mantra_text',get_option('page_for_posts')); ?></h4>
</section>

<?php get_footer(); ?>