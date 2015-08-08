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
					<footer class="entry-meta-sp">
						<?php
							$tag_list = get_the_tag_list( '', ', ' );
							if ( '' != $tag_list ) {
								$utility_text = __( 'Pubicado en %1$s y tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'themename' );
							} else {
								$utility_text = __( 'Pubicado en %1$s. Etiquetas <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'themename' );
							}
							printf(
								$utility_text,
								get_the_category_list( ', ' ),
								$tag_list,
								get_permalink(),
								the_title_attribute( 'echo=0' )
							);
						?>

						<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
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
