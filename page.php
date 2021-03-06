<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <?php // get_template_part( 'template-parts/featured-image' ); ?>

 <div class="grid-container" role="main">
 	<div class="grid-x">

		 <?php do_action( 'foundationpress_before_content' ); ?>
		 <?php while ( have_posts() ) : the_post(); ?>
			<div class="cell small-12 medium-8">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
					
						<?php // display ACF fields (Lead-in) - dpc180407 ?>

						<h2><?php the_field('lead-in_heading'); ?></h2>
						<p><?php the_field('lead-in_copy'); ?></p>
					
					<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
				<footer>
					<?php
						wp_link_pages(
							array(
								'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
								'after'  => '</p></nav>',
							)
						);
					?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
			</div>
		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>
		<div class="cell small-12 medium-4">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>

 <?php get_footer();
