<?php
/*////////////////////////////////////////////////////////////

  functions - css_js.php

  CSS、javascriptの登録と出力

--------------------------------------------------------------

  1. CSS、javascriptの登録と出力

////////////////////////////////////////////////////////////*/

/*------------------------------------------------------------
 1. CSS、javascriptの登録と出力
------------------------------------------------------------*/
if ( !is_admin() ) {

  /* CSSの登録 */
  function register_css() {
    // destyle
    wp_register_style( 'destyle', get_template_directory_uri() . '/css/destyle.css' );

    // base
    wp_register_style( 'base', get_template_directory_uri() . '/css/base.css' );

    // typekit
    wp_register_style( 'typekit', 'https://use.typekit.net/zqq0vyc.css' );

    // slick
    wp_register_style( 'slick', get_template_directory_uri() . '/js/slick/slick.css' );
    wp_register_style( 'slick-theme', get_template_directory_uri() . '/js/slick/slick-theme.css' );

    // colorbox
    wp_register_style( 'colorbox', get_template_directory_uri() . '/js/colorbox/colorbox.css' );

    // editor-style
    wp_register_style( 'editor-style', get_template_directory_uri() . '/editor-style.css' );

    // style
    wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
  }

  /* CSSの読込み */
  function load_css() {
    register_css();
    wp_enqueue_style( 'destyle' );
    wp_enqueue_style( 'typekit' );
    wp_enqueue_style( 'base' );
    //wp_enqueue_style( 'colorbox' );
    wp_enqueue_style( 'slick' );
    wp_enqueue_style( 'slick-theme' );
    wp_enqueue_style( 'editor-style' );
    wp_enqueue_style( 'style' );
  }
  add_action( 'wp_print_styles', 'load_css' );


  /* JSの登録
     最後の引数がtrueの場合、wp-footer()に、falseの場合wp-head()に読込まれる。
  */
  function register_js() {
    // 共通
    // wp_register_script( 'jquery', get_template_directory_uri() .'/js/jquery-2.1.4.min.js', array(), NULL, false );
    wp_register_script( 'migrate', get_template_directory_uri() . '/js/migrate.js', array(), NULL, false );

    // 個別
    wp_register_script( 'commonjs', get_template_directory_uri() . '/js/common.js', array(), NULL, true );
    //wp_register_script( 'sp-panel', get_template_directory_uri() . '/js/sp-panel.js', array(), NULL, true );
    wp_register_script( 'index', get_template_directory_uri() . '/js/index.js', array(), NULL, true );
    //wp_register_script( 'blog', get_template_directory_uri() . '/js/blog.js', array(), NULL, true );
    wp_register_script( 'mailform', get_template_directory_uri() . '/js/mailform.js', array(), NULL, true );
    //wp_register_script( 'event_modal', get_template_directory_uri() . '/js/event-modal.js', array(), NULL, true );

    /* プラグイン */
    // smoothScroll
    wp_register_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothScroll.js', array(), NULL, false );

    // colorbox
    wp_register_script( 'colorbox', get_template_directory_uri() . '/js/colorbox/jquery.colorbox.js', array(), NULL, false );

    // trunk8
    wp_register_script( 'trunk8', get_template_directory_uri() . '/js/trunk8.js', array(), NULL, false );

    // autoKana
    wp_register_script( 'autokana', get_template_directory_uri() . '/js/jquery.autoKana.js', array(), NULL, false );

    // slick
    wp_register_script( 'slick', get_template_directory_uri() . '/js/slick/slick.min.js', array(), NULL, false );

    // infiniteslidev2
    wp_register_script( 'infiniteslidev2', get_template_directory_uri() . '/js/infiniteslidev2.js', array(), NULL, false );

    // waypoints
    //wp_register_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), NULL, false );

    // moment
    wp_register_script( 'moment', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js', array(), NULL, true );
    wp_register_script( 'moment_ja', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/ja.js', array(), NULL, true );

    // ajaxzip3
    wp_register_script( 'ajaxzip3', 'https://ajaxzip3.github.io/ajaxzip3.js', array(), NULL, true );
    
    // scrollreveal
    wp_register_script( 'scrollreveal', 'https://unpkg.com/scrollreveal', array(), NULL, true );

  }

  function load_js() {
    register_js();

    wp_deregister_script( 'jquery' ); //wordpressデフォルトのjqueryの読み込みを停止
    //contatform7使用時はwp_deregister_scriptを使用するとjavascriptが読込まれないので使用しないこと！

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array(), NULL, false );
    wp_enqueue_script( 'migrate' );
    //wp_enqueue_script( 'colorbox' );
    wp_enqueue_script( 'smoothscroll' );
    wp_enqueue_script( 'trunk8' );
    wp_enqueue_script( 'slick' );
    wp_enqueue_script( 'infiniteslidev2' );
    wp_enqueue_script( 'scrollreveal' );
    wp_enqueue_script( 'commonjs' );

    if ( is_front_page() ) {
      //wp_enqueue_script( 'index' );
      //wp_enqueue_script( 'waypoints' );
    } elseif ( is_page( array( 'information', 'contact' ) ) ) {
        wp_enqueue_script( 'autokana' );
        wp_enqueue_script( 'ajaxzip3' );
        wp_enqueue_script( 'mailform' );
      }
      //elseif ( is_page( 'about' ) ) {
      //}
  }
  add_action( 'wp_print_scripts', 'load_js' );
}