<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<div class="contenedor">
  <div class="catalogo_cont"><!--Catalogo_cont-->
    <div class="row">

				<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header">
						<h1 class="entry-title-sp"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->
					<hr>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php //comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<?php //if (function_exists('wp_corenavi')) wp_corenavi(); ?>


	<?php prod_relacionados(""); ?>

	</div>

</div>  

</div>  

<div class="contenedor"><!-- Footer -->

	<?php get_footer();  ?>
</div><!-- .Footer -->

