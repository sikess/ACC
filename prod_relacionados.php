<?php 
// BUCLE PARA LOS POST RELACIONADOS
function prod_relacionados($titulo){


$cates=current_category();

$args = array(

        'cat'=>$cates,
        'showposts'=>3,
        'orderby'=>'date',
        'order' => 'DESC',

    );
 $ncomentario=get_comments_number();
?>


    <div class="conternedor">
    <div class="row">
 <hr>
 <div class="contenedor">
 <div class="row">
    <div class="medium-4 small-4 columns reset">
      <div class="etiqueta ">
        PRODUCTOS
       </div>
    </div>
    </div>
    <hr>  
<?php
    $que_posts = new WP_Query($args);
    while ($que_posts->have_posts()):
        $que_posts->the_post();
      ?>

  <div class="item_content large-4 medium-6 columns">

      <div class="items large-12 medium-12 small-12 columns reset">
        <div class="fondo_item large-12 medium-12 small-12 columns">
            <div class="imagen">
            <a href="#" data-reveal-id="myModal1">

                <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) {
    
                echo'<a href="'; the_permalink(); echo'">';the_post_thumbnail('para_los_post'); echo'</a>';
                } else {
    
                    $postimage = get_post_meta($post->ID, 'post-image', true);
                        if ($postimage) {
    
                        echo '<img class=imagen src="'.$postimage.'" alt="" />';
                        } else{
                            
                            $srcc = '<img src="'.IMAGES.'/fondo_item.jpg" alt="" />';
                            echo $srcc;
                     }
                    } 
                ?>      

            </a> 
            </div>
        </div>
        
          <div class="titulo_item">
            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themename' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
          </div>
          <div class="cont_descripcion">
            <div class="descripcion">
            <?php if ( is_archive() || is_search() ) : // Only display Excerpts for archives & search ?>
        <div class="entry-summary">
            <?php the_content_limit('40'); /*the_excerpt_rss();*/ ?>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content_limit('40'); /*the_excerpt_rss();*/ ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
        <?php endif; ?>          </div>
        </div>
      </div>
    </div>

<?php endwhile; ?>  

    </div>
    </div>

    <?php

}

// .BUCLE PARA LOS POST RELACIONADOS
 ?>