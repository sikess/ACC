<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>


<div class="contenedor"><!--CONTENEDOR DE CUERPO Y LISTA DE POST-->

	<div class="entre_seccion"></div><!--F entre_seccion-->

	<div id="conte_cuerpo">

	<div class="conte_todos_post">

		<section id="primary" role="region">
			<div id="content">

				<?php the_post(); ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php if ( is_day() ) : ?>
							<?php printf( __( 'Daily Archives: <span>%s</span>', 'themename' ), get_the_date() ); ?>
						<?php elseif ( is_month() ) : ?>
							<?php printf( __( 'Monthly Archives: <span>%s</span>', 'themename' ), get_the_date( 'F Y' ) ); ?>
						<?php elseif ( is_year() ) : ?>
							<?php printf( __( 'Yearly Archives: <span>%s</span>', 'themename' ), get_the_date( 'Y' ) ); ?>
						<?php else : ?>
							<?php _e( 'Blog Archives', 'themename' ); ?>
						<?php endif; ?>
					</h1>
				</header>

				<?php rewind_posts(); ?>

				<?php get_template_part( 'loop', 'archive' ); ?>

			</div><!-- #content -->
		</section><!-- #primary -->

	</div></div></div>


   <div class="el_sidebar">

		<!-- <div class="conte_sidebar"> -->
			<?php get_sidebar(); ?>
		<!-- </div> -->

	</div>  
    
</div><!--FIN CONTENEDOR DE CUERPO Y LISTA DE POST-->
	   
	
	 </div><!-- .conte_cuerpo -->	

<div class="entre_seccion"></div><!--F entre_seccion-->


<div class="contenedor"><!-- Footer -->
	<?php get_footer();  ?>
</div><!-- .Footer -->
