<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <ul class="social-media">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('footer_social_media','option') ):

                    // loop through the rows of data
                    while ( have_rows('footer_social_media','option') ) : the_row();
                ?>
                    <li><a href="<?php the_sub_field('links'); ?>"><i class="fa <?php the_sub_field('icon'); ?> fa-2x" aria-hidden="true"></i></a></li>
                    <?php 
                    endwhile;

                else :

                    // no rows found

                endif;

                ?>
                </ul>
                <p>© COPYRIGHT 2016 MIOB</p>
            </div>
        </div>
    </div>
</footer>

    <!-- Modal Video -->
<div id="video" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            <a class="logo" href="front-page.html"><img src="<?php echo get_template_directory_uri();?>/img/Logo-MIOB4.png" alt="MIOB"></a>
        </div>
        
        <div class="modal-body">
           <div class="container-fluid">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-zero embed-responsive embed-responsive-16by9">
                    <div id="foxnews">
                        <iframe class="embed-responsive-item" src="<?php the_field('video'); ?>" allowfullscreen="true"></iframe>
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

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            <a class="logo" href="front-page.html"><img src="<?php echo get_template_directory_uri();?>/img/Logo-MIOB4.png" alt="MIOB"></a>
        </div>
        
        <div class="modal-body">

            <h2 class="text-center">Meld je gratis aan</h2>

            <!-- Form -->
            <form>
            <div class="form-group form-inline form-name-fields input-group">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Voer je voornaam in *" required="required">
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Voer je achternaam in *" required="required">
            </div>
            
            
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                <input id="form_lastname" type="email" name="surname" class="form-control" placeholder="Voer emailadres in *" required="required">
            </div>
            
            
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Voer je email-adres nog een keer in *" required="required">
            </div>

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                <input id="form_email" type="password" name="email" class="form-control" placeholder="Voer je wachtwoord in *" required="required">
            </div>
            
            
            <!-- <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Voer je telefoonnummer in" required="required">
            </div> -->

           <!--  <div class="form-group form-inline">
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

            </div> -->

            <!-- <div class="form-group">
                <label class="radio-inline"><input type="radio" name="optradio">Man</label>
                <label class="radio-inline"><input type="radio" name="optradio">Vrouw</label>
            </div> -->
            
            <div class="form-group">    
                <input type="submit" class="btn btn-warning" value="Aanmelden">
            </div>
        </form>                
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Sluiten</button>
        </div>
    </div>

    </div>
</div>

<?php wp_footer();?>

</body>

</html>  