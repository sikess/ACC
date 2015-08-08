<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<div class="contenedor">
  <div class="catalogo_cont"><!--Catalogo_cont-->
    <div class="row">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header-sp">
							<div class="entry-title-sp"><?php the_title(); ?></div>
						<hr>
					</header><!-- .entry-header -->

					<div class="entry-content-sp">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
						<hr>
					
				</article><!-- #post-<?php the_ID(); ?> -->

			
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

	
			</div><!-- #content --><?php prod_relacionados(""); ?>
		</div><!-- #primary -->


  </div>
  </div><!--Fin catalogo_cont-->
</div>
    


<div class="contenedor"><!-- Footer -->
	<?php get_footer();  ?>
</div><!-- .Footer -->
