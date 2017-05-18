<div class="wpjit_woo_products woocommerce columns-3">
<div class="woocommerce columns-3">
<ul class="products">
<?php 
    $args = array(
        'post_type'   => 'product',
       // 'showposts'   => 6,
        'orderby'     => 'date',
        'order'       => 'DESC' ,
        
    );

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

        <li>    
            <?php 
                if ( has_post_thumbnail( $loop->post->ID ) ) 
                    echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); 
                else 
                    echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />'; 
            ?>
            <h3><?php the_title(); ?></h3>

            <?php 
                echo $product->get_price_html(); 
                woocommerce_template_loop_add_to_cart( $loop->post, $product );
            ?>    
           <!--  <a href="http://localhost/demos/packages/"> Add to cart</a> -->

        </li>

<?php 
    endwhile;
    wp_reset_query(); 
?></ul>

</div>

</div>