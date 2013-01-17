<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php 
		if ( is_singular() && get_option( 'thread_comments' ) ) 
			wp_enqueue_script( 'comment-reply' ); 
		
		/*wp_enqueue_script('jquery');
		
        function loadScriptJqueryDependent() {
            wp_enqueue_script(
                    'yourtheme-script', get_template_directory_uri() . '/js/scripts.js', array('jquery')
            );
			
			if (is_front_page()){
				wp_enqueue_script('yourtheme-jqueryui', get_template_directory_uri() . '/js/jquery-ui-1.8.20.custom.min.js', array('jquery'));
				wp_enqueue_script('yourtheme-jqueryui', get_template_directory_uri() . '/js/jquery.custom-script.min.js', array('jquery'));
				wp_enqueue_script('jquery-ui-core');
			}
        }

        add_action('wp_enqueue_scripts', 'loadScriptJqueryDependent');*/
		?>
        <?php wp_head(); ?>
    </head>
	
	<body <?php body_class(); ?>>
	
	<?php wp_nav_menu(); ?>