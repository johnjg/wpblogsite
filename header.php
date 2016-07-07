<!DOCTYPE html>
<html>
    <head>
        <title><?php the_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

        <!-- Begin Slider -->
                <!-- jQuery library (served from Google) -->
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                <!-- bxSlider Javascript file -->
                <script src="http://www.johnjg.com/wordpress/wp-content/themes/blank-template-johngotschall/js/jquery.bxslider.min.js"></script>
                <!-- bxSlider CSS file -->
                <link href="http://www.johnjg.com/wordpress/wp-content/themes/blank-template-johngotschall/css/jquery.bxslider.css" rel="stylesheet" />
                <script>
                $(document).ready(function () {
                    $('.bxslider').bxSlider();
                });
                </script>
        <!-- End Slider -->

        <!-- Begin Sticky Header -->
        <script type="text/javascript" src="http://www.johnjg.com/wordpress/wp-content/themes/blank-template-johngotschall/js/jquery.sticky.js"></script>
        <script>
          $(window).load(function(){
            $("#stickyheader").sticky({ topSpacing: 0 });
          });
        </script>
        <!-- End Sticky Header -->

    </head>
    <body>

    <!-- begin facebook Javscript SDK -->
        <script>
              window.fbAsyncInit = function() {
                  FB.init({
                      appId      : '508970172645222',
                      xfbml      : true,
                      version    : 'v2.6'
                  });
              };
              (function(d, s, id){
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) {return;}
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/sdk.js";
                  fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));
        </script>
    <!-- end facebook Javscript SDK -->

        <div class="container">

        <!-- begin Top Bar -->
        <div id="stickyheader" class="row topbar">
            <div class="six columns">
              <h5><a href="mailto:contact@johnjg.com">contact@johnjg.com</a></h5>
            </div>
            <div class="six columns">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <input type="search" class="search-field"
                    placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>"
                    value="<?php echo get_search_query() ?>" name="s"
                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                </form>
            </div>
        </div>
        <!-- End Top Bar -->

        <!-- Begin Banner -->
        <header class="row gradient">
            <div class="twelve columns">
                <h1>
                    <!-- ADD LINK TO HOME_URL -->
                    <a href="<?php $url = home_url('/'); echo $url; ?>">
                    <img src="http://www.johnjg.com/wordpress/wp-content/themes/blank-template-johngotschall/img/logo.png" alt="WordPress Vs. Logo" />
                    </a>
                </h1>
            </div>
        </header>
        <!-- End Banner -->

        <!-- Begin Navigation -->
        <nav class="row">
            <div class="twelve columns">
                <?php
                	wp_nav_menu( array(
                		'sort column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                	));
                ?>
            </div>
        </nav>
        <!-- End Navigation -->
