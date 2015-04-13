<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <?php
    /*
     * We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    /*
     * Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
    ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="opacity: 0; min-height: 50px">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"><?php _e( 'Toggle navigation', 'bootstrapcanvaswp' ); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <?php
        wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
        );
        ?><!--/.nav-collapse -->
    </div>
</nav>

<?php $header_image = get_header_image(); ?>
<div class="col-xs-9 col-sm-2 col-md-2" <?php if ( get_header_image() ) : ?>style="background-image: url( '<?php echo esc_url( $header_image ); ?>'); background-size: cover; background-repeat: no-repeat; background-position: top left; margin-bottom: 30px; width: 100%; height: 100%; min-height: <?php echo HEADER_IMAGE_HEIGHT; ?>px; position: relative; "<?php endif; ?> style="padding-right: 0">
    <div  <?php if ( get_header_image() ) : ?>style="height: auto; min-height: <?php echo HEADER_IMAGE_HEIGHT; ?>px; position: relative;"<?php endif; ?>>
        <?php if ( display_header_text() ) : ?>
            <?php $header_text_color = get_header_textcolor(); ?>
            <h1 class="blog-title" style="color: #<?php echo $header_text_color ?>; font-size: 18px;margin-top: 0;"><a href="<?php echo home_url(); ?>" style="font-family:ASAP;font-weight: bold">Julie</br><span style="white-space: nowrap;">Ooghe-Tabanou</span></a></br><span style="color:#0000FF">-</span></h1>


            <p class="lead blog-description" style="color: #<?php echo $header_text_color ?>; font-size: 9px"><?php bloginfo( 'description' ); ?></p>
        <?php else : ?>
            <h1 class="blog-title" style="visibility: hidden; margin: 0; padding: 0; font-size: 0;"><?php bloginfo( 'name' ); ?></h1>
            <p class="lead blog-description" style="visibility: hidden; margin: 0; padding: 0; font-size: 0;"><?php bloginfo( 'description' ); ?></p>
        <?php endif; ?>
    </div>
</div>
<div class="col-sm-10 col-md-10 custom-language" style="height:79px">
    <?php $translations = pll_the_languages(array('raw'=>1));?>
    <div style="padding:0;font-size: 13px;font-weight: bold">
        <a href="<?php echo $translations[0]['url'];?>">
            <span                     <?php if (pll_current_language()=='fr'):?>
                                        style="text-decoration: underline"
                                      <?php endif;?>
                >Fr</span>
        </a>&nbsp;&nbsp;-&nbsp;&nbsp;
        <a href="<?php echo $translations[1]['url'];?>">
            <span                     <?php if (pll_current_language()=='en'):?>
                style="text-decoration: underline"
            <?php endif;?>
                >En</span>
        </a>
    </div>

</div>
<div class="col-xs-12 col-sm-2 col-md-2 text-format" id="accordion" role="tablist" aria-multiselectable="true">
    <?php $args = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order'
    );
    $pages = get_pages( $args );

    foreach( $pages as $page ) {
        $content = $page->post_content;
        if ( ! $content ) // Check for empty page
            continue;

        $content = apply_filters( 'the_content', $content );
        ?>
        <div class="" role="tab" id="headingOne">
            <h4 style="font-size: 13px">
                <a style="color: #000000" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $page->post_name; ?>" aria-expanded="false" aria-controls="collapseOne">
                    <?php echo $page->post_title; ?>
                </a>
            </h4>
        </div>
        <div id="<?php echo $page->post_name; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="  padding-top: 11px;padding-bottom: 10px;">
            <div class="akkurat-font" style="font-size: 9px">
                <?php echo $content; ?>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php if ( is_singular() ) : ?>
<div class="col-xs-12 col-sm-10 col-md-10" style="padding-top: 35px">
<?php else:?>
<div class="col-xs-12 col-sm-10 col-md-10" style="padding-top: 48px">
<?php endif;?>

    <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic' rel='stylesheet' type='text/css'>