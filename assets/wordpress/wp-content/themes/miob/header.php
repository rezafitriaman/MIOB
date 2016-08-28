<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MIOB">
    <meta name="author" content="DBK.NL">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon/16x16.png">

    <title><?php the_title();?></title>

    <?php wp_head();?>

</head>

<body>
<?php if(is_front_page() || is_page_template('template-blog.php') || is_single()): ?>
<section class="top">
        <input type="checkbox" id="sidebartoggler" name="navigatie">

        <div class="balk">
            <a class="logo" href="http://localhost:8888/miob2/assets/wordpress/"><img src="<?php echo get_template_directory_uri();?>/img/Logo-MIOB4.png" alt="MIOB"></a>
            <ul class="bellen hidden-xs">
                <li>Voor vragen bel ons op</li>
                <li><a href="tel:<?php the_field('telefoon','option'); ?>" class="nummer"><i class="fa fa-phone" aria-hidden="true"></i><?php the_field('telefoon','option'); ?></a></li>
            </ul>
            <a class="inloggen hidden-xs" href="http://localhost:8888/miob2/assets/wordpress/profiel/"><i class="fa fa-sign-in" aria-hidden="true"></i>Inloggen</a>
            <label for="sidebartoggler" class="toggle"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></label>
            <div class="sidebar">
                <ul class="nav">
                    <li><a class="active menu" href="http://localhost:8888/miob2/assets/wordpress/">Home</a></li>
                    <li><a class="menu" href="http://localhost:8888/miob2/assets/wordpress/onze-blog/">Blog</a></li>
                    <li><a class="menu" href="#" data-toggle="modal" data-target="#myModal">Inschrijven</a></li>
                    <li class="inloggen-mobiel hidden-lg hidden-md hidden-sm"><a href="ingelogd.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Inloggen</a></li>
                </ul>
                <ul class="mobiel-phone">
                    <li><p>Voor vragen bel ons op</p></li>
                    <li><a class="phone" href="tel:<?php the_field('telefoon', 'option'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('telefoon','option'); ?></a></li>
                </ul>
            </div>
        </div>

</section>
<?php else:?>
<section class="top-ingelogd">
    <input type="checkbox" id="sidebartoggler" name="">

    <div class="balk">
        <a class="logo" href="http://localhost:8888/miob2/assets/wordpress/"><img src="<?php echo get_template_directory_uri();?>/img/Logo-MIOB4.png"" alt="MIOB"></a>
        <ul class="bellen hidden-xs">
            <li>Voor vragen bel ons op</li>
            <li><a href="tel:0629333234" class="nummer"><i class="fa fa-phone" aria-hidden="true"></i>062922234</a></li>
        </ul>
        <a class="pts hidden-xs" href="<?php echo get_permalink();?>"><i class="fa fa-cubes" aria-hidden="true"></i>467</a>
        <label for="sidebartoggler" class="toggle"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></label>
        <div class="sidebar">
            <ul class="nav">
                <li><a class="active menu" href="front-page.html">Home</a></li>
                <li><a class="menu" href="blog-page.html">Blog</a></li>
                <li><a class="menu" href="#">Jou profiel</a></li>
                <li class="pts-mobiel hidden-lg hidden-md hidden-sm"><a href="<?php echo get_permalink();?>"><i class="fa fa-cubes" aria-hidden="true"></i>467</a></li>
            </ul>

            <ul class="mobiel-phone">
                <li><p>Voor vragen bel ons op</p></li>
                <li><a class="phone" href="tel:0629333234"><i class="fa fa-phone" aria-hidden="true"></i> +31 629333233</a></li>
            </ul>

            <ul class="uitloggen">
                <li><a href="http://localhost:8888/miob2/assets/wordpress/" class="log-uit"><i class="fa fa-sign-out" aria-hidden="true"></i>Log uit</a></li>
            </ul>
        </div>
    </div>

</section>
            
    <?php endif ?>