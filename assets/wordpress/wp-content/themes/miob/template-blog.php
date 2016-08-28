<?php 
/* 
** Template Name: blog 
*/ ?>
<?php get_header(); ?>

<section class="blogmeer">
    <div class="container">
        <div class="row text-center">
             <h1><?php the_field('title_part_1'); ?> <span><?php the_field('title_part_2'); ?></span> <?php the_field('title_part_3'); ?></h1>
             <p class="subtitel"><?php the_field('subtitle'); ?></p>
        </div>
        
        <div class="row bevindt">
            <ul class="navigatie">
                <li class="black">U bevindt zich hier:</li>
                <li><a href="http://localhost:8888/miob2/assets/wordpress/" class="orange">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="http://localhost:8888/miob2/assets/wordpress/onze-blog/" class="orange">Blog</a></li>
            </ul>
        </div>
	<div class="row">
        <?php
            $type = 'post';
            $args = array ( 
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                    );
            $my_query = new WP_query($args);
                
                if ( $my_query->have_posts()) {
                    while ($my_query->have_posts()) : $my_query->the_post();

                    $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 background">
            <div class="blog-box">
                <ul class="top">
                <?php
                    $terms = get_the_terms( $post->ID , 'category' );
                        foreach ( $terms as $term ) {
                            $category_name = $term->name;
                        }
                ?>
                    <li class="category"><?php echo $category_name?></li>
                    <li class="kijkers"><?php echo do_shortcode("[post-views]"); ?></li>
                    <li class="datum"><?php echo get_the_date( get_option('date_format') )?></li>
                </ul>
               
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $url_image; ?>" class="img-responsive center-block"></a>
                
                <h4><?php echo get_the_title() ?></h4>
                <p><?php the_field('text_preview'); ?><strong><a href="<?php echo get_permalink( $post->ID ); ?>">&nbsp Lees Meer</strong></a></p>
                <ul class="bottom">

                <?php
        

                    $opts = dvkss_get_options();
                    $defaults = array(
                        'element' => 'p',
                        'social_options' => 'twitter, facebook, googleplus',
                        'twitter_username' => $opts['twitter_username'],
                        'before_text' => $opts['before_text'],
                        'twitter_text' => __( 'on Twitter', 'dvk-social-sharing' ),
                        'facebook_text' => __( 'on Facebook', 'dvk-social-sharing' ),
                        'googleplus_text' => __( 'on Google+', 'dvk-social-sharing' ),
                    );

                    // create final arguments array
                    $title = urlencode( html_entity_decode( get_the_title(), ENT_COMPAT, 'UTF-8' ) );
                    $url = urlencode( get_permalink() );

                    ob_start();

                ?>
                    <li class="shares">Shares</li>
                    <li class="socialmedia"><a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo $url; ?>&p[title]=<?php echo $title; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="socialmedia"><a href="http://twitter.com/intent/tweet/?text=<?php echo $title; ?>&url=<?php echo $url; ?><?php if( ! empty( $args['twitter_username'] ) ) {  echo '&via=' . sanitize_text_field( $args['twitter_username'] ); } ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="socialmedia"><a href="https://plus.google.com/share?url=<?php echo $url; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li class="comment"><?php echo get_comments_number();?>&nbsp<i class="fa fa-comments-o" aria-hidden="true"></i></li>
                </ul>
            </div>
        </div>
        <?php

                endwhile;
            }
            wp_reset_query(); //Restore global post    
        ?>

    </div>

</section>

<?php get_footer(); ?>