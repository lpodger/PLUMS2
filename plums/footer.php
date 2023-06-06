<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plums
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>&#xa9;2022 Lachlan Podger</p> 	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/js/hamburger.js"></script>
</body>
</html>
