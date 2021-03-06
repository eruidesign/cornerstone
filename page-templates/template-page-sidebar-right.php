<?php
/**
 * Template Name: Page Template, Right Sidebar
 *
 * Description: Use this page template to add the sidebar to the right of the page.
 *
 * @package WordPress
 * @subpackage Cornerstone
 * @since Cornerstone 5.0.0
 */

get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-padding-x">
		<div id="primary" class="auto cell site-content">
			<main id="content">

				<?php do_action( 'cornerstone_before_content' );

				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'template-parts/content', 'page' );

					do_action( 'cornerstone_page_before_comments' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					do_action( 'cornerstone_page_after_comments' );

				endwhile;

				do_action( 'cornerstone_after_content' ); ?>

			</main>
		</div>

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>