<footer>
	<div class="footer-logo">
		<div class="img-wrapper">
			<?php $headerLogo = get_field('logo',get_option('page_for_posts')); ?>
        	<img src="<?php echo $headerLogo['url'] ?>" alt="<?php echo $headerLogo['alt'] ?>"/>
		</div>
		<h2><?php the_field('tagline_text',get_option('page_for_posts')); ?></h2>
	</div>
	<div class="footer-bottom">
		<p>&copy; 2016 Carnita Ltd. | Designed by Jordan G. and Remy Z.</p>
		<nav class="footer-nav">
	        <?php wp_nav_menu( array(
	            'container' => false,
	            'theme_location' => 'primary'
	        )); ?>
    	</nav>
	</div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?> <!-- //necessary to not break the page- needs to go at bottom of every doc so that wordpress/ browser knows its the end of the page-->
</body>
</html>