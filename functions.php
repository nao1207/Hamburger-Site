<?php
    //テーマサポート
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');//アイキャッチ画像取り扱い

    //タイトルの出力
    function Hamburger_title($title) {
        if(is_front_page()&& is_home()) { //トップページなら
            $title = get_bloginfo('name', 'display');
        }elseif(is_singular()){ //シングルページなら
            $title = single_post_title('',false);
        }
            return $title;
        }
    add_filter('pre_get_document_title','Hamburger_title');

    function Hamburger_script() {
        wp_enqueue_style('preconnect','//fonts.googleapis.com', array() );
        wp_enqueue_style('preconnect', '//fonts.gstatic.com', array() );
        wp_enqueue_style('fonts.googleapis.com/css2?family=M+PLUS+1:wght@100;200;300;400;500;600;700&display=swap', array() );
        wp_enqueue_style('normalize', get_template_directory_uri(). '/css/normalize.css',array(), '4.5.0');
        //リセットcss
        wp_enqueue_style('ress.style', '//unpkg.com/ress/dist/ress.min.css',array());
        wp_enqueue_style('Hamburger', get_template_directory_uri().'/css/Hamburger.css', array(),'1.0.0');
        wp_enqueue_style('style', get_theme_file_uri('/css/style.css'),array(),'1.0.0');
        wp_enqueue_style('editor-style', get_theme_file_uri('/css/editor-style.css'),array(),'1.0.0');
    }
    add_action('wp_enqueue_scripts','Hamburger_script');

    function theme_name_files() {
        //jQuery読み込み
        wp_enqueue_script('jquery');
        }
        add_action( 'wp_enqueue_scripts', 'theme_name_files' );

        // function custom_print_scripts() {
        //     if (!is_admin()) {
        //         //デフォルトjquery削除
        //         wp_deregister_script('jquery');
        
        //         //GoogleCDNから読み込む
        //         wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
        //     }
        // }
        // add_action('wp_print_scripts', 'custom_print_scripts');

    //ウィジェット
    function hamburger_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'カテゴリーウィジェット',
                'id'            => 'category_widget',
                'description'   => 'カテゴリー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'hamburger_widgets_init' );
