<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package adamos
 * @since adamos 2.0
 */
?>
    <!DOCTYPE html>
    <!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/painLabs.css" media="screen" type="text/css" />
    <?php wp_enqueue_script("jquery"); ?>
        <?php wp_enqueue_script("jquery-color"); ?>
            <?php wp_enqueue_script("jquery-ui-core"); ?>
                <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jQuery.succinct.min.js"></script>


                <!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

                <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <?php do_action( 'before' ); ?>
                <div id="masthead-wrap">
                    <header id="masthead" class="site-header header_container" role="banner">
                        <div class="wrap">
                            <?php if ( get_theme_mod( 'adamos_logo' ) ) : ?>
                                <div class="site-logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'adamos_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                                </div>
                                <?php else : ?>
                                    <div class="site-introduction">
                                        <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?><span>Pain</span><span>Studies</span><span>Lab</span></a></h1>
                                        <p class="site-description">
                                            <?php bloginfo( 'description' ); ?>
                                        </p>
                                    </div>
                                    <?php endif; ?>
                                    <?php /* 
                                        <div class="social-share">
                                            <a href="https://www.facebook.com/confrontingpain"><i class="fa fa-facebook-square"></i></a>
                                            <a href="https://twitter.com/TransPainLab"><i class="fa fa-twitter-square"></i></a>
                                            <a href="http://www.pinterest.com/transpainlab/"><i class="fa fa-pinterest"></i></a>
                                            <a href="https://www.youtube.com/user/TransformingPainTV"><i class="fa fa-youtube"></i></a>
                                        </div>
                                    */ ?>
                                        <nav role="navigation" class="site-navigation main-navigation">
                                            <h1 class="assistive-text"><i class="fa fa-bars"></i></h1>
                                            <?php /*
        <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'adamos' ); ?>">
                                                <?php _e( 'Skip to content', 'adamos' ); ?>
                                                    </a>
                        </div>
                        */ ?>
                                            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                                        </nav>
                                        <!-- .site-navigation .main-navigation -->
                            </div>
                            </header>
                            <!-- #masthead .site-header -->
                    </div>
                    <!-- #masthead-wrap -->
                    <?php /* 
            <div class="header-image">
            <?php $header_image = get_header_image();
                if ( ! empty( $header_image ) ) { ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
                    </a>
                        <?php } // if ( ! empty( $header_image ) ) ?>
                </div>
                <?php if(is_front_page()):?>
                    <div class="featuretext_top">
                        <h3><?php echo get_theme_mod( 'featured_textbox' ); ?></h3>
                        <p>
                            <a href="<?php echo esc_url( get_theme_mod( 'header_one_url' ) ); ?>">
                                <?php echo esc_html(get_theme_mod( 'featured_textbox_text' ) ); ?>
                            </a>
                        </p>
                    </div>
                    <?php endif; ?>
                        */ ?>
                        <div id="main" class="site-main">