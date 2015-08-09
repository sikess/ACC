<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); 

unregister_sidebar( 'Sidebar');
?>



<?php get_template_part( 'loop', 'index' ); ?>




<div class="contenedor"><!-- Footer -->
	<?php get_footer();  ?>
</div><!-- .Footer -->
