<!DOCTYPE html>
<html lang="<?php language_attributes();?>"> <!-- 言語設定を自動で出力 -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
        ?>
        <?php wp_enqueue_script('jQueryプラグインファイル', '/wp-content/themes/Hamburger/js/jQueryプラグインファイル'); ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class();?>>
        <div class="main-watermark_bg"></div>
        <div class="u-grid">
            <header class="l-header">
                <div class="c-inner">
                    <h2 class="c-button--sidebar">Menu</h2>
                    <div class="l-header__section">
                        
                        <h1 class="c-title--header">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                        </h1>
                        
                        <?php get_search_form(); ?>
                    </div>
                </div><!--.c-inner-->
            </header>