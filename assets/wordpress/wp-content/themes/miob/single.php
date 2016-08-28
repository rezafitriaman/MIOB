<?php get_header(); ?>
<section class="blogleesmeer">
<?php if (has_post_thumbnail( )) : ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '1600x670' ); ?>
    <div class="jumbotron" style="background-image: url('<?php echo $image[0]; ?>');"></div>
<?php endif; ?>
    <div class="container">
    
        <div class="row bevindt">
            <ul class="navigatie">
                <li class="black">U bevindt zich hier:</li>
                <li><a href="http://localhost:8888/miob2/assets/wordpress/" class="orange">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="http://localhost:8888/miob2/assets/wordpress/onze-blog/" class="orange">Blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo get_permalink( $post->ID ); ?>" class="orange">Lees Meer</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="top">
                <?php
                $terms = get_the_terms( $post->ID , 'category' );
                    foreach ( $terms as $term ) {
                        $category_name = $term->name;
                    }
                ?>
                    <li class="category"><?php echo $category_name?></li>
                    <li class="datum pull-right"><?php echo get_the_date( get_option('date_format') )?></li>
                    <li class="kijkers pull-right"><?php echo do_shortcode("[post-views]"); ?></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wie">
                <?php 
				    $image = get_field('auteur_foto');
				    $size = '370x250';
				    if( $image ):
				?>
                    <img src="<?php echo wp_get_attachment_image_src( $image , '$size' )[0]; ?>" class="foto img-responsive img-circle">
                <?php endif; ?>    
                    <ul class="beschrijving">
                        <li>Auteur</li>
                        <li class="naam"><?php the_field('auteur_naam'); ?></li>
                        <li class="bedrijf"><?php the_field('auteur bedrijf'); ?></li>
                    </ul>
                </div>
                <div class="text">
                    <h1><?php echo get_the_title() ?></h1>
                    <?php the_field('text_inhoud'); ?>
                </div>

            </div>
        </div>

        <div class="row informatie text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="leestijd" data-aos="fade-right">
                    <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i></li>
                    <li><?php the_field('lees_tijd'); ?></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="delen">
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
                    <li>delen:</li>
                    <li><a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo $url; ?>&p[title]=<?php echo $title; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="http://twitter.com/intent/tweet/?text=<?php echo $title; ?>&url=<?php echo $url; ?><?php if( ! empty( $args['twitter_username'] ) ) {  echo '&via=' . sanitize_text_field( $args['twitter_username'] ); } ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://plus.google.com/share?url=<?php echo $url; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="reactie" data-aos="fade-left">
                	<li><?php echo get_comments_number();?></li>
                    <li><i class="fa fa-commenting-o fa-lg" aria-hidden="true"></i></li>
                </ul>
            </div>
        </div>

        <div class="row form">
         
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php comment_form(); ?>
                
            </div>
        </div>
		
	
		<?php foreach(get_comments(array('post_id'=> get_the_id())) as $comment): ?>
        <div class="row reactie-block">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 ">
                <span class="user"><i class="fa fa-user fa-5x" aria-hidden="true"></i></span>
            </div>
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 ">
                <div class="text">
                <h4 class="naam"><?php echo $comment->comment_author ?></h4>
                <p class="reactie"><?php echo $comment->comment_content ?></p>
                </div>
            </div>
        </div>

        <?php endforeach ?>

    </div>
</section>

<div id="pro" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            <a class="logo" href="front-page.html"><img src="<?php echo get_template_directory_uri();?>/img/Logo-MIOB4.png" alt="MIOB"></a>
        </div>
        
        <div class="modal-body">
            
            <h4>Meld u nu aan om direct toegang tot exclusieve content te krijgen!</h4>
            <p>Voor maar slechts 19.99 euro / Maand!</p>

            <!-- Form -->
            <form>
           <!--  <div class="form-group form-inline form-name-fields input-group">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Voer je voornaam in *" required="required">
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Voer je achternaam in *" required="required">
            </div> -->
            
            
            <!-- <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                <input id="form_lastname" type="email" name="surname" class="form-control" placeholder="Voer emailadres in *" required="required">
            </div> -->
            
            
            <!-- <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Voer je email-adres nog een keer in *" required="required">
            </div> -->

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                <input id="form_email" type="password" name="email" class="form-control" placeholder="Voer je wachtwoord in *" required="required">
            </div>
            
            
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Voer je telefoonnummer in" required="required">
            </div>
            
            <label for="email">Geborte Datum</label>  
            <div class="form-group form-inline"> 
                <select class="form-control margin-bottom" id="sel1">
                    <option>Maand</option>
                    <option>Januari</option>
                    <option>februari</option>
                    <option>maart</option>
                    <option>april</option>
                    <option>mei</option>
                    <option>juni</option>
                    <option>juli</option>
                    <option>augustus</option>
                    <option>september</option>
                    <option>oktober</option>
                    <option>november</option>
                    <option>december</option>
                </select>
                <select class="form-control margin-bottom" id="sel2">
                    <option>Dag</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>3</option>
                </select>
                <select class="form-control margin-bottom" id="sel3">
                    <option>Jaar</option>
                    <option>1991</option>
                    <option>1992</option>
                    <option>1993</option>
                </select>

            </div>

            <div class="form-group">
                <label class="radio-inline"><input type="radio" name="optradio">Man</label>
                <label class="radio-inline"><input type="radio" name="optradio">Vrouw</label>
            </div>
            
            <label for="email">Betalen met</label>
            <div class="form-group form-inline">
                <select class="form-control margin-bottom" id="sel4">
                    <option>IDEAL</option>
                    <option>Creditcard</option>
                </select>
            </div>

            <div class="form-group">    
                <input type="submit" class="btn btn-warning" value="PRO versie">
            </div>
        </form>                
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Sluiten</button>
        </div>
    </div>

    </div>
</div>  


<?php get_footer(); ?>