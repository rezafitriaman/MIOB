<?php get_header(); ?>

<section class="header singelmodul">
    <div class="jumbotron darken-bg" style="background-image: url('<?php echo get_template_directory_uri();?>/img/profielbackground.jpg');">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="modul">
                           <img src="<?php echo get_template_directory_uri();?>/png/share.png" class="img-responsive center-block">
                           <h2 class="text-center">Social Media</h2>
                           <div class="procent text-center">
                                <p><strong>70%</strong></p>
                            </div>
                           <div class="bar-under">
                                <span class="bar-upper"></span>
                            </div>
                            <div class="overzicht text-center">
                                <p><a href="http://localhost:8888/miob2/assets/wordpress/profiel/">Cursus Overzicht</a></p>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="module-overzicht">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul>
                    <li><h3 class="timer count-title" id="count-number" data-to="15" data-speed="1500"></h3></li>
                    <li>Module</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul>
                    <li><h3 class="timer count-title" id="count-number" data-to="10" data-speed="1500"></h3></li>
                    <li>Quiz</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul>
                    <li><h3 class="timer count-title" id="count-number" data-to="1" data-speed="1500"></h3></li>
                    <li>Project</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="module">
    <div class="container">
        <div class="row margin-bottom">
		<?php
	
	    $args = array ( 
	            'post_type' => 'hoofdstukken',
	            'post_status' => 'publish',
	            'posts_per_page' => -1,
	            'post_parent' => get_the_id(),
	            'orderby'=> 'menu_order'
	            );
	    $my_query = new WP_query($args);
	    $i = 0;
		?>
		<?php while ($my_query->have_posts()) : $my_query->the_post();?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="text-center">Hoofdstuk : <strong><?php the_title() ?></strong></h1>
            </div>
			<?php
		
		    $args = array ( 
		            'post_type' => 'lessen',
		            'post_status' => 'publish',
		            'posts_per_page' => -1,
		            'post_parent' => get_the_id(),
		            'orderby'=> 'menu_order'
		            );
		    $my_query1 = new WP_query($args);
			?>
			<?php while ($my_query1->have_posts()) : $my_query1->the_post();?>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                <div class="panel-group block-cursus-completed">

                    <a data-toggle="collapse" href="#collapse<?php echo $i ?>" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-left"><i class="fa fa-check-circle fa-3x" aria-hidden="true"></i></span>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Les : <strong><?php the_title() ?></strong></h4>
                                <span class="badge"><i class="fa fa-cubes" aria-hidden="true"></i>235</span>
                                <p class="hidden-sm hidden-xs"><?php the_field('subtitle'); ?></p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-right"><i class="fa fa-chevron-circle-down fa-2x" aria-hidden="true"></i></span>
                            </div>        
                        </div>
                    </a>

                </div>
                <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                    <ul class="list-group">
                    <?php
	
				    $args = array ( 
				            'post_type' => 'lesonderdelen',
				            'post_status' => 'publish',
				            'posts_per_page' => -1,
				            'post_parent' => get_the_id(),
				            'orderby'=> 'menu_order'
				            );
				    $my_query2 = new WP_query($args);
				    
					?>

					<?php while ($my_query2->have_posts()) : $my_query2->the_post();?>
            
                        <a href="<?php echo get_permalink(); ?>"><li class="list-group-item"><h4><?php the_title() ?></h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <!-- <a href="cursus-singel-text.html"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="cursus-singel-test.html"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a> -->
                     <?php endwhile; wp_reset_query() ?>   

                    </ul>
                </div>

                <!-- <div class="panel-group block-cursus-pro"">


                    <a data-toggle="collapse" href="#collapse2" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-left"><i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Quiz : <strong>Introductie van Social Media</strong></h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-pro"><p>PRO</p></span>
                            </div>        
                        </div>
                    </a>
                        
                    
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div> -->

                <!-- <div class="panel-group block-cursus-pro">
                    
                    <a data-toggle="collapse" href="#collapse1" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-left"><i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Quiz : <strong>Introductie van Social Media</strong></h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-pro"><p>PRO</p></span>
                            </div>        
                        </div>
                    </a>

                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div> -->

            </div>
            <?php $i++ ?>
            	<?php endwhile; wp_reset_query() ?>
            <?php endwhile; wp_reset_query() ?>

            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>MODULE 2 : <strong>Trends en ontwikkelingen binnen social media</strong></h1>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="panel-group block-cursus-completed">
                    <a data-toggle="collapse" href="#collapse5" class="a-wrap">
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-left"><i class="fa fa-check-circle fa-3x" aria-hidden="true"></i></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Les : <strong>Social media monitoring tools</strong></h4>
                                <span class="badge"><i class="fa fa-cubes" aria-hidden="true"></i>232</span>
                                <p class="hidden-sm hidden-xs">Real-time monitoring, Real-time alerts en dashboards, Automatische rapportage</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-right"><i class="fa fa-chevron-circle-down fa-2x" aria-hidden="true"></i></span>
                            </div>        
                        </div>
                    </a>
                </div>

                <div id="collapse5" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div>

                <div class="panel-group block-cursus-progress">
                    <a data-toggle="collapse" href="#collapse6" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-procent"><p>30%</p></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Les : <strong>Activeren social-mediaomgeving</strong></h4>
                                <p class="hidden-sm hidden-xs">Twitter, Facebook, LinkedIn,YouTube, Instagram</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-right"><i class="fa fa-chevron-circle-down fa-2x" aria-hidden="true"></i></span>
                            </div>        
                        </div>
                    </a>
                </div>

                <div id="collapse6" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div>

                <div class="panel-group block-cursus-stop">
                    <a data-toggle="collapse" href="#collapse7" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-procent"><p>0%</p></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Les : <strong>Activeren social-mediaomgeving</strong></h4>
                                <p class="hidden-sm hidden-xs">De drie fasen van social media-marketing</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-right"><i class="fa fa-ban fa-2x" aria-hidden="true"></i></span>
                            </div>        
                        </div>
                    </a>
                </div>

                <div id="collapse7" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div>
                
                <div class="panel-group block-cursus-stop">
                    <a data-toggle="collapse" href="#collapse8" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-procent"><p>0%</p></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Les : <strong>Pr en reputatie-management via social media</strong></h4>
                                <p class="hidden-sm hidden-xs">De structuur, real-time serviceverlening van een organisatie</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-right"><i class="fa fa-ban fa-2x" aria-hidden="true"></i></span>
                            </div>        
                        </div>
                    </a>
                </div>

                <div id="collapse8" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div>

                <div class="panel-group block-cursus-pro">
                    <a data-toggle="collapse" href="#collapse9" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-lock"><i class="fa fa-puzzle-piece fa-3x" aria-hidden="true"></i></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Les : <strong>Mobile campagnes</strong></h4>
                                <p class="hidden-sm hidden-xs">meer conversies Mobile Advertising kan je helpen bij het realiseren van deze doelstellingen</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-pro"><p>PRO</p></span>
                            </div>        
                        </div>
                    </a>
                </div>

                <div id="collapse9" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div>

                <div class="panel-group block-cursus-pro">
                    <a data-toggle="collapse" href="#collapse10" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-lock"><i class="fa fa-puzzle-piece fa-3x" aria-hidden="true"></i></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Les : <strong>Responsive websites</strong></h4>
                                <p class="hidden-sm hidden-xs">Een optimale webervaring voor een breed scala aan apparaten</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-pro"><p>PRO</p></span>
                            </div>        
                        </div>
                    </a>
                </div>

                <div id="collapse10" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div>

                <div class="panel-group block-cursus-pro">
                    <a data-toggle="collapse" href="#collapse11" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-lock"><i class="fa fa-puzzle-piece fa-3x" aria-hidden="true"></i></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Les : <strong>Responsive websites</strong></h4>
                                <p class="hidden-sm hidden-xs">Een optimale webervaring voor een breed scala aan apparaten</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-pro"><p>PRO</p></span>
                            </div>        
                        </div>
                    </a>
                </div>

                <div id="collapse11" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div>

                <div class="panel-group block-cursus-pro">
                    <a data-toggle="collapse" href="#collapse12" class="a-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-lock"><i class="fa fa-puzzle-piece fa-3x" aria-hidden="true"></i></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4>Les : <strong>Responsive websites</strong></h4>
                                <p class="hidden-sm hidden-xs">Een optimale webervaring voor een breed scala aan apparaten</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <span class="icon-pro"><p>PRO</p></span>
                            </div>        
                        </div>
                    </a>
                </div>

                <div id="collapse12" class="panel-collapse collapse">
                    <ul class="list-group">
                        <a href="cursus-singel-video.html"><li class="list-group-item"><h4>Video</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Text</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>
                        <a href="#"><li class="list-group-item"><h4>Test</h4><i class="fa fa-chevron-right" aria-hidden="true"></i></li></a>

                    </ul>
                </div>

            </div> -->

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
            <a class="logo" href="front-page.html"><img src="img/Logo-MIOB4.png" alt="MIOB"></a>
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