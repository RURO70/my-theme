

<!DOCTYPE html>
<!--
<!DOCTYPE html>
-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
    <title>
    <?php if (is_home()) {
            echo get_bloginfo('name');
        }else if(is_single()){
            echo the_title();
        }else{
            echo get_bloginfo('name');
        }?>
    </title>
    <?php wp_head(); ?>
</head>
<body>

<!--*****HEADER*****-->

    <header>
        <div class="container">
            <div class="row">                
                <div class="logo col-xs-12 col-sm-6">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo pagina del curso"></a>
                </div>
                <div class="redes-sociales col-xs-12 col-6">
                    <a class="youtube" href="http://www.youtube.com/falconmasters"><i class="fa fa-youtube-play"></i></a>
                    <a class="twitter" href="http://www.twitter.com/falconmasters"><i class="fa fa-twitter" ></i></a>
                    <a class="facebook" href="http://www.facebook.com/falconmasters"><i class="fa fa-facebook" ></i></a>
                </div>                    
            </div>
        </div>
    

<!--*****MENU/NAVEGACION*****-->

        <nav class="menu">
            <div class="container">
                <div class="row">
                    <?php wp_nav_menu(array(
                        'container' => false,
                        'menu_class' => '',
                        'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
                        'theme_location' => 'menu-top'
                    )); ?>                   
                </div>
            </div>
        </nav>

<!--*****PUBLICIDAD*****-->

        <div class="ad container hidden-xs">
            <div class="row">
                <div class="col-md-12">
                <!--Aqui iria la publicidad en vez de la imagen-->
                    <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="Imagen Publicidad">
                </div>
            </div>
        </div>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : endif; ?>
    </header>
  
    


                        

 