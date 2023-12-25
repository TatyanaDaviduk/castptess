<?php

    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

    function theme_name_scripts() {
	      wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
          wp_enqueue_script( 'script', get_template_directory_uri() . 'js/script.js', array(), '1.0.0', true );
    };


    add_filter( 'upload_mimes', 'svg_upload_allow' );

    # Добавляет SVG в список разрешенных для загрузки файлов.
    function svg_upload_allow( $mimes ) {
    	$mimes['svg']  = 'image/svg+xml';

    	return $mimes;
    }
    add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

    # Исправление MIME типа для SVG файлов.
    function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

    	// WP 5.1 +
    	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
    		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    	}
    	else {
    		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
    	}

    	// mime тип был обнулен, поправим его
    	// а также проверим право пользователя
    	if( $dosvg ){

    		// разрешим
    		if( current_user_can('manage_options') ){

    			$data['ext']  = 'svg';
    			$data['type'] = 'image/svg+xml';
    		}
    		// запретим
    		else {
    			$data['ext']  = false;
    			$data['type'] = false;
    		}

    	}

    	return $data;
    }


    // Регистрируем возможности темы
    add_action( 'after_setup_theme', function(){

    	// возможность изменять фон из админки
    	add_theme_support( 'custom-background' );

    	// возможность изменять изображения в шапке из админки
    	add_theme_support( 'custom-header' );



    	// создание метатега <title> через хук
    	add_theme_support( 'title-tag' );

    	// возможность загрузить картинку логотипа в админке
    	add_theme_support( 'custom-logo', [
    		'height'      => 30,
    		'width'       => 81,
    		'flex-width'  => false,
    		'flex-height' => true,
    		'header-text' => '',
    	] );
        //возможность установить миниатюру посту
        add_theme_support( 'post-thumbnails' );
    });




	//регистрируем несколько меню
	function castpress_menus() {

		$locations = array(
			'header'  => __( 'Header Menu', 'castpress' ),
			'footer'   => __( 'Footer Menu', 'castpress' ),
	
		);
	
		register_nav_menus( $locations );
	}
	
	add_action( 'init', 'castpress_menus' );


	//добавим класс header__menu-item ко всем пунктам меню
	add_filter('nav_menu_css_class', 'custom_nav_menu_css_class',10,1);
	//получаем список все классов пунктов меню
	function custom_nav_menu_css_class($classes){
		//добавляем к списку классов свой класс
		$classes[] = 'header__menu-item'; 

		return $classes;
	}

	//повесим на все ссылки меню header__menu-link 
	add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes',10,2);
	function custom_nav_menu_link_attributes($atts, $depth){ //depth вложенносить
		//добавляем к списку классов свой класс
		$atts['class'] = 'header__menu-link'; 

		return $atts;
	}
?>


