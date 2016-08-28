<?php 
/* 
** Template Name: profiel 
*/ ?>
<?php get_header(); ?>
<section class="header">
    <div class="jumbotron darken-bg" style="background-image: url('<?php echo get_template_directory_uri();?>/img/profielbackground.jpg');">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="profiel-foto">
                            <h2 class="text-center">Welkom</h2>
                            <img src="<?php echo get_template_directory_uri();?>/img/renger.jpg" class="img-responsive img-circle center-block">
                            <h3 class="text-center">Renger Kok</h3>
                            <span class="icon-pro-basis">
                                <p>BASIS</p>
                            </span>
                            <h5>
                                <a href="#" data-toggle="modal" data-target="#pro">Probeer gratis PRO versie</a>
                            </h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="badges">
    <div class="container">

        <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a href="#" class="click-skills">
                    <div class="skiils">
                        <p><i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i></p>
                        <h3 class="timer count-title" id="count-number" data-to="3" data-speed="1500"></h3>
                        <p>Skills voltooid</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a href="#" class="click-skills" data-toggle="modal" data-target="#badge">
                    <div class="badges">
                        <p><i class="fa fa-certificate fa-3x" aria-hidden="true"></i></p>
                        <h3 class="timer count-title" id="count-number" data-to="5" data-speed="1500"></h3>
                        <p>Badges verdiend</p>
                    </div>
                </a>    
            </div>
        </div>
        
    </div>
</section>

<section class="status">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p class="joined">Joined <strong>May 30, 2016</strong></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <ul class="points">
                    <li><h3 class="timer count-title" id="count-number" data-to="467" data-speed="1500"></h3></li>
                    <li><p>Totaal points</p></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <ul class="streak">
                    <li><h3>0</h3></li>
                    <li><p>Day streak</p></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p class="last-coded">Laatst ingelogd <strong>22 dagen geleden</strong></p>
            </div>
        </div>
        
    </div>
</section>

<section class="completed">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="text-center completed">Voltooid <strong>Skills</strong></h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 completed-block">

                <div class="container show-completed">
                    <a href="#" class="link">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Email-Marketing</h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 check-relative">
                                <div class="completed-bar" id="complete-bar">
                                    
                                </div>
                                <div class="check">
                                    <span class="check"><i class="fa fa-check fa-lg" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 arrow-relative">
                                <p class="text-center completed-text hidden-xs">Voltooid 10 dagen geleden</p>
                                <div class="arrow">
                                    <span class="arrow"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="container show-completed">
                    <a href="#" class="link">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Social-Media</h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 check-relative">
                                <div class="completed-bar">
                                    
                                </div>
                                <div class="check">
                                    <span class="check"><i class="fa fa-check fa-lg" aria-hidden="true"></i></span>
                                </div>    
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 arrow-relative">
                                <p class="text-center completed-text hidden-xs">Voltooid 2 weken geleden</p>
                                <div class="arrow">
                                    <span class="arrow"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="container show-completed">
                    <a href="#" class="link">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Tag-Manager</h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 check-relative">
                                <div class="completed-bar">
                                    
                                </div>
                                <div class="check">
                                    <span class="check"><i class="fa fa-check fa-lg" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 arrow-relative">
                                <p class="text-center completed-text hidden-xs">Voltooid 1 maand geleden</p>
                                <div class="arrow">
                                    <span class="arrow"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </div>            
</section>

<section class="inprogress">
    <div class="container">
        <div class="row margin-bottom">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="text-center completed">In progress <strong>( 2 )</strong></h2>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inprogress-block">
                <?php
                    $type = 'module';
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
                <div class="container show-progress">
                    <a href="<?php the_permalink(); ?>" class="link">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4><?php echo get_the_title() ?></h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 check-relative">
                                <div class="background-progress">
                                    <div class="progress-bar" id="progress-bar" style="width:0%">
                                        
                                    </div>
                                </div>
                                <div class="check">
                                    <span class="check"><strong>0%</strong></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 arrow-relative">
                                <p class="text-center progress-text hidden-xs">Ga verder</p>
                                <div class="arrow">
                                    <span class="arrow"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php

                endwhile;
                    }
                    wp_reset_query(); //Restore global post    
                ?>


            </div>
        </div>
    </div>            
</section>

<section class="betaalde-optie darken-bg" style="background-image: url('<?php echo get_template_directory_uri();?>/img/profielbackground.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="left">
                    <h4>Wilt u volledig gebruik maken van onze modules? Klik dan op <strong>PRO knop!</strong></h4>                    
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="right text-center">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pro">PRO</button>
                </div>
            </div>
        </div>
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

<div id="badge" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            <a class="logo" href="front-page.html"><img src="<?php echo get_template_directory_uri();?>/img/Logo-MIOB4.png" alt="MIOB"></a>
        </div>
        
        <div class="modal-body">

            <div class="title">
                <h4 class="text-center">Badges verdiend</h4>
                <p class="text-center">Kijk naar welke badges je hebt gekregen</p>
            </div>

            <div class="container-fluid badges-inhoud">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge1.png" class="center-block not-earn"></a>
                        <p class="text-center">Eerste keer ingelogd</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge2.png" class="center-block not-earn"></a>
                        <p class="text-center">Master SEO</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Maart 22, 2016">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge3.png" class="center-block"></a>
                        <p class="text-center earn">Master SEA</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge4.png" class="center-block not-earn"></a>
                        <p class="text-center">Sessie 1 Voltoid</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge5.png" class="center-block not-earn"></a>
                        <p class="text-center">9 keer ingelogd</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge6.png" class="center-block not-earn"></a>
                        <p class="text-center">google-Adword Voltoid</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge7.png" class="center-block not-earn"></a>
                        <p class="text-center">Social-Media SEA</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge8.png" class="center-block not-earn"></a>
                        <p class="text-center">Email-Marketing Voltoid</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge9.png" class="center-block not-earn"></a>
                        <p class="text-center">90 keer ingelogd</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge10.png" class="center-block not-earn"></a>
                        <p class="text-center">Introductie van Google</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge11.png" class="center-block not-earn"></a>
                        <p class="text-center">400 score gehaald</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Augustus 23, 2016">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge12.png" class="center-block"></a>
                        <p class="text-center">Google-Analytics Voltoid</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge13.png" class="center-block not-earn"></a>
                        <p class="text-center">90 keer ingelogd</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge14.png" class="center-block not-earn"></a>
                        <p class="text-center">Introductie van Google</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge15.png" class="center-block not-earn"></a>
                        <p class="text-center">400 score gehaald</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Nog niet">
                        <img src="<?php echo get_template_directory_uri();?>/png/badge16.png" class="center-block not-earn"></a>
                        <p class="text-center">Google-Analytics Voltoid</p>
                    </div>
                </div>
            </div>    
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Sluiten</button>
        </div>
    </div>

    </div>
</div>  

<?php get_footer(); ?>