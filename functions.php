<?php
show_admin_bar( false );
add_theme_support('menus', 'widget');



function my_jquery_remove() {
    if (!is_admin()) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', false);
    }
}
//add_action('init', 'my_jquery_remove'); 






/**********************************************************************/
register_sidebar(
        array(
            "name"          => "rodape",
            "description"   => "conteudo colocado no rodape",
            "id"            => "rodape",
            'before_widget' => ' <div class="p-4 col-md-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        )
);
/**********************************************************************/

/* * *************************elementor****************************** */
/* * *************************elementor****************************** */
add_theme_support('post-thumbnails');
function your_prefix_render_hfe_header() {

    if (function_exists('hfe_render_header')) {
        hfe_render_header();
    }
}
add_action('astra_header', 'your_prefix_render_hfe_header');
function your_prefix_header_footer_elementor_support() {
    add_theme_support('header-footer-elementor');
}
add_action('after_setup_theme', 'your_prefix_header_footer_elementor_support');
/***************************elementor*******************************/

/*******************************************************************/
function abreVideo($video) {
    $atts['link'] = $video;
    $link         = $atts['link'];
    $link         = explode("v=", $link);
    $x            = "<iframe  frameborder='0' allow='autoplay'; allowfullscreen='1' height='auto' src='https://www.youtube.com/embed/" . $link[1] . "?autoplay=1&mute=1'>  </iframe>";
    $x            = "<iframe src='https://www.youtube.com/embed/" . $link[1] . "?autoplay=1&mute=1&loop=1&playlist=" . $link[1] . ";' volume='0' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
    return $x;
}
/********************************************************************/

add_image_size( 'miniaturas', 400, 400, array( 'center', 'center' ) );