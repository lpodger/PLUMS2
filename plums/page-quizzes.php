<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plums
 */

get_header();
?>

	<main id="primary" class="site-main results">
		<div class="results-hero">
			<img src="<?php echo get_template_directory_uri();?>/images/underline-word-quiz.svg" class="underline-small" alt="Please Level Up My Skills Underlined">
		</div>
		<div class="quizzes-container">
		<img src="<?php echo get_template_directory_uri();?>/images/rocket.svg" class="underline-one rocket" alt="Woman Riding Rocket">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
