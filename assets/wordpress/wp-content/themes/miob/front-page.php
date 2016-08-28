<?php get_header(); ?>
<section class="header">
    <?php 
        $image = get_field('header_img');
        $size = 'full';
        if( $image ):
    ?>
    <div class="header-bg darken-bg" style="background-image: url('<?php echo wp_get_attachment_image_src( $image , '$size' )[0]; ?>');">
    <?php endif; ?>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background-trans">
                        <h4 class="top"><?php the_field('header_tekst_een'); ?></h4>
                        <h1><?php the_field('header_tekst_twee'); ?></h1>
                        <h3><?php the_field('header_tekst_drie'); ?></h3>
                        <div class="button">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal"><?php the_field('button_links'); ?></button>
                            <button class="button-blog">
                                <a href="http://localhost:8888/miob2/assets/wordpress/onze-blog/"><?php the_field('button_rechts'); ?></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 color-left">
                <div class="left">
                    <h1><?php the_field('linker_block_title'); ?></h1>
                    <p><?php the_field('linker_block_subtitle'); ?></p>
                    <span><i class="fa fa-universal-access fa-5x" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 color-right">
                <div class="right">
                    <h2><?php the_field('rechter_block_title'); ?></h2>
                    <p><?php the_field('rechter_block_subtitle'); ?></p>
                    <div class="verder">
                        <a href="#" data-toggle="modal" data-target="#video"><?php the_field('link_video'); ?></a>
                        <span><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doel">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 data-aos="fade-up"><?php the_field('section_twee_title'); ?> <span><?php the_field('section_twee_title_kleur'); ?></span></h1>
                <p><?php the_field('section_twee_subtitle'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="aanbod">
    <div class="container text-center">
        <div class="row">

        <?php 

            if( have_rows('module') ):
                $i = 0;

            while( have_rows('module') ): the_row(); 

                // vars
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
        
        ?>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="item">
                    <?php if( $image ): ?>
                    <span><i class="fa <?php echo $image; ?> fa-4x" aria-hidden="true"></i></span>
                    <?php endif; ?>
                    <ul>

                        <?php if ($i % 2 == 0): ?>
                        <?php echo "<li data-aos='fade-right'><h3>" . $title . "</h3></li>"; ?>
                        <?php else: ?>   
                        <?php echo "<li data-aos='fade-left'><h3>". $title . "</h3></li>"; ?>
                        <?php endif;?>    
                    
                        <?php if( $subtitle ): ?>    
                        <li><p><?php echo $subtitle; ?></p></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>

        <?php 
            $i++;
            endwhile;
        
            endif; 
        ?>

        </div>    
    </div>
</section>

<?php 
    $image = get_field('s_drie_background');
    $size = 'full';
    if( $image ):
?>
<section class="online-omgeving darken-bg" style="background-image: url('<?php echo wp_get_attachment_image_src( $image , '$size' )[0]; ?>');">
<?php endif; ?>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1><?php the_field('s_drie_title'); ?></h1>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal"><?php the_field('s_drie_button'); ?></button>
            </div>
        </div>
        <div class="row background-color">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php 
                    $image = get_field('s_drie_image');
                    $size = '1600x670';
                    if( $image ):
                ?>
                <img src="<?php echo wp_get_attachment_image_src( $image , '$size' )[0]; ?>" class="img-responsive img-thumbnail center-block">
                <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h3><?php the_field('s_drie_subtitle'); ?></h3>
                <ul>
                    <?php
                        // check if the repeater field has rows of data
                        if( have_rows('s_drie_list') ):
                            // loop through the rows of data
                            while ( have_rows('s_drie_list') ) : the_row();
                    ?>    

                    <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i><?php the_sub_field('list_item'); ?></li>

                    <?php 
                    endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="inschrijvingen">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1><span class="cijfers"><?php the_field('s_vier_title_cijfer'); ?></span> <?php the_field('s_vier_title_text'); ?></h1>
            </div>
        </div>
        <div class="row text-center">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('s_vier_fact') ):

                // loop through the rows of data
                while ( have_rows('s_vier_fact') ) : the_row();
            ?>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box">
                    <span class="icon"><i class="fa <?php the_sub_field('icon'); ?> fa-5x" aria-hidden="true"></i></span>
                    <h3 data-aos="fade-up"><span class="cijfers"><?php the_sub_field('cijfer'); ?></span> <?php the_sub_field('naam'); ?></h3>
                    <p><?php the_sub_field('subtitle'); ?></p>
                </div>
            </div>
            
            <?php
            endwhile;

            else :

                // no rows found

            endif;
            ?>
            
        </div>
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal"><?php the_field('s_vier_button'); ?></button>
            </div>
        </div>
    </div>
</section>

<?php 
    $image = get_field('s_vijf_background_image');
    $size = 'full';
    if( $image ):
?>
<section class="trainers darken-bg" style="background-image: url('<?php echo wp_get_attachment_image_src( $image , '$size' )[0]; ?>');">
<?php endif; ?>
    <div class="container-fluid">
        <div class="flex-row">

            <div class="box orange">
                <?php 
                    $image = get_field('linker_block_foto');
                    $size = 'thumbnail';
                    if( $image ):
                ?>
                <img data-aos="flip-left" src="<?php echo wp_get_attachment_image_src( $image , '$size' )[0]; ?>" class="img-responsive img-circle">
                <?php endif; ?>
                <h3 class="name"><?php the_field('linker_block_naam'); ?></h3>
                <h4 class="role"><i class="fa fa-star" aria-hidden="true"></i>Trainer</h4>
                <p class="quote"><?php the_field('linker_block_text'); ?></p>
                <ul class="icon">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('linker_social_media_trainer') ):

                    // loop through the rows of data
                    while ( have_rows('linker_social_media_trainer') ) : the_row();
                ?>
                    <li><a href="<?php the_sub_field('links'); ?>"><i class="fa <?php the_sub_field('icon'); ?>" aria-hidden="true"></i></a></li>
                <?php
                endwhile;

                else :

                    // no rows found

                endif;

                ?>    
                </ul>
            </div>

            <div class="box black">
                <?php 
                    $image = get_field('rechter_block_foto');
                    $size = 'thumbnail';
                    if( $image ):
                ?>
                <img data-aos="flip-right" src="<?php echo wp_get_attachment_image_src( $image , '$size' )[0]; ?>" class="img-responsive img-circle">
                <?php endif; ?>
                <h3 class="name"><?php the_field('rechter_block_naam'); ?></h3>
                <h4 class="role"><i class="fa fa-star" aria-hidden="true"></i>Trainer</h4>
                <p class="quote"><?php the_field('rechter_block_text'); ?></p>
                <ul class="icon">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('rechter_social_media_trainer') ):

                    // loop through the rows of data
                    while ( have_rows('rechter_social_media_trainer') ) : the_row();
                ?>
                    <li><a href="<?php the_sub_field('links'); ?>"><i class="fa <?php the_sub_field('icon'); ?>" aria-hidden="true"></i></a></li>
                <?php
                    endwhile;

                    else :

                        // no rows found

                    endif;

                ?>  
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="partners">
    <div class="container">
        <div class="row text-center">
            <h3>Wij zijn trots op onze samenwerking met</h3>
        </div>
        <div class="row">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('logos') ):

                // loop through the rows of data
                while ( have_rows('logos') ) : the_row();
            ?>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="<?php the_sub_field('logo'); ?>" class="img-responsive center-block">
            </div>

            <?php
            endwhile;

            else :

                // no rows found

            endif;

            ?>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="row text-center">
             <h1>Lees ook onze <span>Blog</span></h1>
        </div>
        <div class="row">
            <div class="row">
            <?php
                $type = 'post';
                $args = array ( 
                        'post_type' => $type,
                        'post_status' => 'publish',
                        'posts_per_page' => 3
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
                        <li class="kijkers"><i class="fa fa-eye" aria-hidden="true"></i>4301</li>
                        <li class="datum">29 juli 2016</li>
                    </ul>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $url_image; ?>" class="img-responsive center-block"></a>
                    <h4><?php echo get_the_title() ?></h4>
                    <div class="paragraph">
                        <p><?php the_field('text_preview'); ?><strong><a href="<?php echo get_permalink( $post->ID ); ?>">&nbspLees Meer</strong></a></p>
                    </div>
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
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4><a href="http://localhost:8888/miob2/assets/wordpress/onze-blog/"><i class="fa fa-plus" aria-hidden="true"></i>Meer Blog</a></h4>
            </div>
        </div>
    </div>    
</section>

<?php get_footer(); ?>