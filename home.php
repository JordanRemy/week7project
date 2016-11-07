<?php get_header(); ?>

<?php $blogbgImage = get_field('blog_background_image',get_option('page_for_posts'));?>
<header class="secondary hero" style="background-image:url(<?php echo $blogbgImage['url']; ?>)">
    <nav class="main-nav">
        <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
        )); ?>
    </nav>
    <div class="header-content">
        <h1><?php the_field('blog_header_text',get_option('page_for_posts')); ?></h1> 
    </div>
</header>

<section class="blog-body">
	<div class="wrapper">
		<div class="main-posts-container">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="main-post <?php the_field('category') ?>">
					<h2><?php the_title(); ?></h2>
					<?php $date = get_the_date('F j, Y'); ?>
					<h4><?php echo $date; ?> | <span><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></span></h4>
					<?php $blogImage = get_field('blog_image'); ?>
					<div class="img-wrapper">
						<img src="<?php echo $blogImage['url']; ?>" alt="">
					</div>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
		<aside>
			<h2>Filter and Sort</h2>
			<?php while(have_rows('side_menu',get_option('page_for_posts'))) : the_row();?>
				<a href="#" class="category"><?php the_sub_field('category',get_option('page_for_posts')); ?></a>
				<hr>
			<?php endwhile; ?>
		</aside>
	</div>
</section>

<?php $mantraImage = get_field('mantra_image',get_option('page_for_posts'));?>
<section class="secondary mantra" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $mantraImage['url']; ?>)">
    <h4><?php the_field('mantra_text',get_option('page_for_posts')); ?></h4>
</section>

<?php get_footer(); ?>