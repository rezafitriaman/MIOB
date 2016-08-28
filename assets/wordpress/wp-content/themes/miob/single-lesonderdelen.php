<?php get_header(); ?>

<!-- Video -->
<?php
$i = 0;
// check if the repeater field has rows of data
if( have_rows('video') ):
?>

<section class="video">
    <div class="container">

        <div class="row tittle text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1><strong><?php the_field('title_video'); ?></strong></h1>
                <p><span></span><?php the_field('subtitle_video'); ?></p>
            </div>
        </div>

        <!-- <div class="row bevindt">
            <ul class="navigatie">
                <li class="black">U bevindt zich hier:</li>
                <li><a href="ingelogd.html" class="orange">Profiel<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="singelmodule.html" class="orange">Social Media<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="cursus-singel-video.html" class="orange">Video Cursus</a></li>
            </ul>
        </div> -->

        <div class="row les">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel-group" id="accordion">
                

				<?php 	
					
				 	// loop through the rows of data
				    while ( have_rows('video') ) : the_row();
				?>

                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>" class="slide"><?php the_sub_field('title_tab');?><span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span></a>
                            </h4>
                        </div>

                        <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="container-fluid">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-zero embed-responsive embed-responsive-16by9">
                                        <div id="foxnews">
                                            <iframe class="embed-responsive-item" src="<?php the_sub_field('content');?>" allowfullscreen="true"></iframe>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php
                  
                endwhile;

				else :

				    // no rows found

				endif;

				?>

                </div> 
            </div>
        </div>
		
		<?php
		$overview = get_lesson_overview_id($post);
		?>
        <div class="row terug-knop">
            <a href="<?php echo get_permalink( $overview ); ?>"><i class="fa <?php the_field('icon_terug_video'); ?>" aria-hidden="true"></i><?php the_field('terugknop_video'); ?></a>
        </div>
        
		



    </div>
</section>

<?php
$i = 0;
// check if the repeater field has rows of data
if( have_rows('text') ):

?>
<!-- Text -->
<section class="video">
    <div class="container">

        <div class="row tittle text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1><strong><?php the_field('title_text'); ?></strong></h1>
                <p><?php the_field('subtitle_text'); ?></p>
            </div>
        </div>

        <!-- <div class="row bevindt">
            <ul class="navigatie">
                <li class="black">U bevindt zich hier:</li>
                <li><a href="ingelogd.html" class="orange">Profiel<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="singelmodule.html" class="orange">Social Media<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="cursus-singel-text.html" class="orange">Text Cursus</a></li>
            </ul>
        </div> -->

        <div class="row les">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel-group" id="accordion">

				<?php 	
				 	// loop through the rows of data
				    while ( have_rows('text') ) : the_row();
				?>

                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>" class="slide"><?php the_sub_field('title_tab');?><span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span></a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php the_sub_field('content');?>
                            </div>
                        </div>
                    </div>
                <?php $i++ ?>

                <?php
                  
                endwhile;

				else :

				    // no rows found

				endif;

				?>    

                    <!-- <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="slide">Marketingplannen<span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span></a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4>Voor wie maakt u eigenlijk marketingplannen?</h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="slide">SWOT-elementen<span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span></a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4>Hoe lang was de lijst met SWOT-elementen in uw laatste marketingplan?</h4>
                                <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="slide">Successen<span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span></a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4>Durft u successen te vieren?</h4>
                                <p>id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</p>
                            </div>
                        </div>
                    </div> -->

                </div> 
            </div>
        </div>

        <?php
		$overview = get_lesson_overview_id($post);
		?>
        <div class="row terug-knop">
            <a href="<?php echo get_permalink( $overview ); ?>"><i class="fa <?php the_field('icon_terug_text'); ?>" aria-hidden="true"></i><?php the_field('terugknop_text'); ?></a>
        </div>

    </div>
</section>

<?php

// check if the repeater field has rows of data
if( have_rows('test') ):

?>	
<section class="video">
    <div class="container">

        <div class="row tittle text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1><strong><?php the_field('title_test'); ?></strong></h1>
                <p><?php the_field('subtitle_test'); ?></p>
            </div>
        </div>

        <!-- <div class="row bevindt">
            <ul class="navigatie">
                <li class="black">U bevindt zich hier:</li>
                <li><a href="ingelogd.html" class="orange">Profiel<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="singelmodule.html" class="orange">Social Media<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="cursus-singel-test.html" class="orange">Test Cursus</a></li>
            </ul>
        </div> -->

        <div class="row les">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="slide">Test<span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span></a>
                            </h4>
                        </div>
                        <div id="collapse1" class="collapse in">
                            <div class="panel-body">
                           		<div class="container vraag-1">
                                   
                                    <form id="form" name="form" method="post" action="">
										<fieldset id="controls">
											
											<?php
												// loop through the rows of data
    											while ( have_rows('test') ) : the_row();
											?>
											<h4><?php the_sub_field('vraag_stelling'); ?></h4>
											
											<?php 

												// check if the repeater field has rows of data
												if( have_rows('antwoorden') ):

												 	// loop through the rows of data
												    while ( have_rows('antwoorden') ) : the_row();

											?>
	                                        <div class="radio">
	                                            <label>
	                                                <input type="radio" name="<?php the_sub_field('input_name'); ?>" id="<?php the_sub_field('input_id'); ?>" value="<?php the_sub_field('input_value'); ?>" checked="true"><?php the_sub_field('antwoord'); ?>
	                                            </label>
	                                        </div>
											
											<?php
											endwhile;

											else :

											    // no rows found

											endif; 
											?>
	                                        <!-- <div class="radio">
	                                            <label>
	                                                <input type="radio" name="vraag1" id="vraag1" value="Fout">Het raadzaam de wijze waarop
	                                            </label>
	                                        </div>

	                                        <div class="radio">
	                                            <label>
	                                                <input type="radio" name="vraag1" id="vraag1" value="Fout2">Dingena en Lenters, 1999
	                                            </label>
	                                        </div> -->

	                                        <?php 
	                                        	endwhile;

											
	                                        ?>

                                    		<!-- <h4>2. Hoeveel marketingplannen liggen bij u in de la?</h4>
                                    
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag2" id="vraag2" value="Fout" checked="true">Marketingplannen uitgewerkt
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag2" id="vraag2" value="Fout2">Het raadzaam de wijze waarop
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag2" id="vraag2" value="Goed">Dingena en Lenters, 1999
	                                          	</label>
	                                        </div>

	                                        <h4>3. Hoeveel marketingplannen liggen bij u in de la?</h4>
                                    
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag3" id="vraag3" value="Fout" checked="true">Marketingplannen uitgewerkt
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag3" id="vraag3" value="Goed">Het raadzaam de wijze waarop
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag3" id="vraag3" value="Fout2">Dingena en Lenters, 1999
	                                          	</label>
	                                        </div>

	                                        <h4>4. Hoeveel marketingplannen liggen bij u in de la?</h4>
                                    
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag4" id="vraag4" value="Goed" checked="true">Marketingplannen uitgewerkt
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag4" id="vraag4" value="Fout">Het raadzaam de wijze waarop
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag4" id="vraag4" value="Fout2">Dingena en Lenters, 1999
	                                          	</label>
	                                        </div>

	                                        <h4>5. Hoeveel marketingplannen liggen bij u in de la?</h4>
                                    
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag5" id="vraag5" value="Fout2" checked="true">Marketingplannen uitgewerkt
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag5" id="vraag5" value="Fout">Het raadzaam de wijze waarop
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag5" id="vraag5" value="Goed">Dingena en Lenters, 1999
	                                          	</label>
	                                        </div>

	                                        <h4>6. Hoeveel marketingplannen liggen bij u in de la?</h4>
                                    
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag6" id="vraag6" value="Fout2" checked="true">Marketingplannen uitgewerkt
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag6" id="vraag6" value="Fout">Het raadzaam de wijze waarop
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag6" id="vraag6" value="Goed">Dingena en Lenters, 1999
	                                          	</label>
	                                        </div>

	                                         <h4>7. Hoeveel marketingplannen liggen bij u in de la?</h4>
                                    
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag7" id="vraag7" value="Fout2" checked="true">Marketingplannen uitgewerkt
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag7" id="vraag7" value="Fout">Het raadzaam de wijze waarop
	                                          	</label>
	                                        </div>
	                                        <div class="radio">
	                                          	<label>
	                                          		<input type="radio" name="vraag7" id="vraag7" value="Goed">Dingena en Lenters, 1999
	                                          	</label>
	                                        </div> -->
	                                </form>

                        		</div>
                                <div class="form-group">    
                                    <input type="submit" class="btn btn-warning" name="Calculate" id="calculate" value="<?php the_field('submit_knop'); ?>">
                                </div>
                                
                            </div>
                        </div>            

                    </div>
                    
                </div> 
            </div>
        </div>
        
        <div class="row score">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="nummers text-center">
                    <ul class="totaal">
                        <li><p><i class="fa fa-cubes" aria-hidden="true"></i>Totaal</p></li>
                        <li><h3 id="result"></h3></li>
                    </ul>
                </div>
            </div>
        </div>
		
		<?php 
		else :

		    // no rows found

		endif;
		?>

        <?php
		$overview = get_lesson_overview_id($post);
		?>
        <div class="row terug-knop">
            <a href="<?php echo get_permalink( $overview ); ?>"><i class="fa <?php the_field('icon_terug_test'); ?>" aria-hidden="true"></i><?php the_field('terugknop_test'); ?></a>
        </div>

    </div>
</section>
<script type="text/javascript">
var numericalValues = new Array();
numericalValues["5"]= 5;
numericalValues["0"]= 0;



function getScoreVraag1()
{
var scoreVraag1 = 0;
var form = document.forms["form"];
var vraag1 = form.elements["vraag1"];
for(var i=0; i<vraag1.length; i++)
{
    if(vraag1[i].checked)
    {
    scoreVraag1 = numericalValues[vraag1[i].value];
    break;
    }

}
return scoreVraag1;
};

function getScoreVraag2()
{
var scoreVraag2 = 0;
var form = document.forms["form"];
var vraag2 = form.elements["vraag2"];

for(var i=0; i<vraag2.length; i++)
{
  if(vraag2[i].checked)
  {
  scoreVraag2 = numericalValues[vraag2[i].value];
  break;
  }

}
return scoreVraag2;
};




function getTotal()
{

var totalScore = getScoreVraag1() + getScoreVraag2();


document.getElementById('result').innerHTML = totalScore;

}

document.getElementById('calculate').onclick=getTotal;
</script>
<?php get_footer(); ?>