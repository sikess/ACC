<?php 
// BUCLE PARA LOS POST RELACIONADOS
function news_relacionados($titulo){


$cates=current_category();

$args = array(

        'cat'=>$cates,
        'showposts'=>2,
        'orderby'=>'date',
        'order' => 'DESC',

    );
 $ncomentario=get_comments_number();
?>
    <div class="conternedor">
    <div class="row">
 
<?php
    $que_posts = new WP_Query($args);
    while ($que_posts->have_posts()):
        $que_posts->the_post();
      ?>


   <div class="news_content large-6 medium-6 small-12 columns">
        <div class="news large-12 medium-12 small-12 columns reset">

            <div class="large-12 medium-12 small-12 columns fondo_news">
                <div class="large-12 medium-12 small-12 columns imagen">
                    <?php echo'<a href="'; the_permalink(); echo'">'; the_post_thumbnail('mas_comentados'); echo'</a>'; ?>
                </div>
            </div>

            <div class="large-12 medium-12 small-12 columns titulo_news">
                <?php echo'<a href="'; the_permalink(); echo'">'; the_title(); echo'</a>'; ?>
            </div>
 <?php
                    printf( __( '<a href="%1$s" rel="bookmark"><span class="calendar"></span><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a>' , 'themename' ),
                        get_permalink(),
                        get_the_date( 'c' ),
                        get_the_date(),
                        get_author_posts_url( get_the_author_meta( 'ID' ) ),
                        sprintf( esc_attr__( 'Ver por %s', 'themename' ), get_the_author() ),
                        get_the_author()
                    );
                ?>

              <div class="large-12 medium-12 small-12 columns descripcion_news">
                

                    
            <?php the_content_limit('40'); /*the_excerpt_rss();*/ ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
           

              </div>
           </div>

        </div>
   
  
            
 <?php
               

           

    endwhile;
    
    ?>
    </div>
    </div>

    <?php

}

// .BUCLE PARA LOS POST RELACIONADOS
 ?>