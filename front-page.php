<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php 
        $bgImage = get_field('background_image');
      ?>
      <header class="hero" style="background-image:url(<?php echo $bgImage['url'] ?>">
        <?php $headerLogo = the_field('header_logo')?>
        <img src="<?php echo $headerLogo['url'] ?>" alt="<?php echo $headerLogo['alt'] ?>"/>
        <h1><?php the_field('header_text') ?></h1> 
        <?php the_content(); ?>
      </header>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>