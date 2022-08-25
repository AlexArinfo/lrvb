<?php
// enregistrer le menu
register_nav_menus(array(
    'menu' => 'principal'
));
// fin

// afficher image à la une
add_theme_support( 'post-thumbnails' );
// fin

//supprimer barre admin
function wpc_show_admin_bar() {
    return false;
}
add_filter('show_admin_bar' , 'wpc_show_admin_bar');
//fin

// Fonction pour afficher le logo dans la nav
add_theme_support('custom-logo');
// fin



//personnaliser l'administration
add_action('admin_init', 'admin_color_scheme');
function admin_color_scheme() {
    wp_admin_css_color(
        'lrvb', // Nom unique du Thème
        __('lrvb'), // Nom du Thème dans l'administration
        get_template_directory_uri() . '/admin.css', // Le chemin vers le fichier CSS du Thème
        array('#500778', '#ffc72c', '#f5193e', '#ffffff') // Les couleurs que l'on souhaite afficher dans la pré-visualisation du thème
    );
}
//fin



//ajouter une taille à l'image à la une
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'home', 1280, 744, false );
    add_image_size( 'slideshow', 1536, 500, true );
    add_image_size( 'blogpage_thumb', 300, 300, false );
    add_image_size( 'singleposthumbnail', 500, 500, false );
    add_image_size( 'singleposthumbnail2', 500, 500, true );
    add_image_size( 'recentpost-thumb', 100, 100, true );
    add_image_size( 'couv', 1536, 1536, false );
    add_image_size( 'gallery-thumb', 600, 400, true );
}
//fin



//	ajout style et script

function monscript() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" );
    wp_enqueue_style( 'anek', "https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@100;200;300;400;500;600&display=swap" );
    wp_enqueue_style( 'jost', "https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" );
    wp_enqueue_style( 'slickcss', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" );
    wp_enqueue_style( 'jquerysmarttabcss', "https://cdn.jsdelivr.net/npm/jquery-smarttab@4/dist/css/smart_tab_all.min.css" );
    
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, '');
        wp_enqueue_script('jquery');
    }
    wp_enqueue_script('jquerysmarttabjq', 'https://cdn.jsdelivr.net/npm/jquery-smarttab@4/dist/js/jquery.smartTab.min.js', false, '');
    wp_enqueue_script('progressbar', get_template_directory_uri() . '/javascript/progressbar.js');
    wp_enqueue_script('header', get_template_directory_uri() . '/javascript/header.js');
    
    wp_enqueue_script('slideshow', get_template_directory_uri() . '/javascript/slideshow.js');
    wp_enqueue_script('counter', get_template_directory_uri() . '/javascript/counter.js');
    wp_enqueue_script('slickautoplay', get_template_directory_uri() . '/javascript/slickautoplay.js');
    wp_enqueue_script('jquerysmarttabjs', get_template_directory_uri() . '/javascript/jquerysmarttabjs.js');
    wp_enqueue_script('galerie', get_template_directory_uri() . '/javascript/galerie.js');
    
    
    
}
add_action( 'wp_enqueue_scripts', 'monscript' );





//Nombres de mots a afficher dans l'aperçu des articles page blog
function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');



function new_excerpt_more($more) {
    global $post;
    return '… <a href="'. get_permalink($post->ID) . '"> <br>' .  'Lire plus' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
//fin

/* ajouter champ "Extrait" dans les page WP */
function ajouter_extrait_pages() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'ajouter_extrait_pages' );





// woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' ) ;

define('WOOCOMMERCE_USE_CSS', false);

// je teste

function widget_register_sidebars() {
    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'widget_register_sidebars' );
    
    if( function_exists('acf_add_options_page') ) {
        
        acf_add_options_page();
        
    }
    
    // modification du logo sur la page de connexion de WordPress
    function my_login_logo() { ?>
        <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/logo.png);
            height:auto;
            width:100%;
            background-size: 200px 150px;
            background-repeat: no-repeat;
            padding-bottom: 150px;
        }
        body.login div#login form#loginform p label {
            font-family: 'Jost';
            font-style: normal;
            font-weight: 400;
            font-size: 1.5em;
            line-height: 35px;
            color: #00171F;}
            #loginform > div > label{font-family: 'Jost';
                font-style: normal;
                font-weight: 400;
                font-size: 1.5em;
                line-height: 35px;
                color: #00171F;}
                #login > p.message{
                    font-style: normal;
                    font-weight: 400;
                    font-size: 1em;
                    line-height: 35px;
                    color: #007EC6;   }
                    #login_error{
                    font-style: normal;
                    font-weight: 400;
                    font-size: 1em;
                    line-height: 35px;
                    border-left-color:#190182;   }
                  
                    #wp-submit{
                        font-family: "Jost";
                        font-style: normal;
                        font-weight: 300;
                        font-size: 1.125em;
                        line-height: 1.625em;
                        background-color: #007EC6;
                        color: white;
                        border: 1px solid #007EC6;
                        border-radius: 15px;
                        padding: 2px 12px;
                        -webkit-transition: 0.3s ease-in-out;
                        transition: 0.3s ease-in-out;
                        cursor: pointer;}
                    </style>
                    <?php }
                    add_action( 'login_enqueue_scripts', 'my_login_logo' );