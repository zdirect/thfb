<?

class Hook_Default{

    const POST_TYPE = 'products';

    public static function init(){
        add_filter( 'upload_mimes', [__CLASS__, 'svg_upload_allow'] );
        add_action( 'after_setup_theme', [ __CLASS__, 'theme_register_nav_menu' ] );
        add_action( 'after_setup_theme', [ __CLASS__, 'image_size' ] );
        add_action( 'after_setup_theme', [ __CLASS__, 'support_theme' ] );
        add_action( 'init', [ __CLASS__, 'register_post_type'] );
        add_filter( 'category_template', [ __CLASS__, 'get_template_for_category'] );
        add_action( 'acf/init', [ __CLASS__, 'register_option' ] );
    }

    public static function register_option() {
        if( function_exists('acf_add_options_page') ) {
	
            acf_add_options_page(array(
                'page_title' 	=> 'Theme General Settings',
                'menu_title'	=> 'Theme Settings',
                'menu_slug' 	=> 'theme-general-settings',
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            ));
        }
    }

    public static function get_template_for_category( $template ) {

        $cat = get_queried_object();
        if( 0 < $cat->category_parent )
            $template = locate_template( 'subcategory.php' );
        return $template;
    }

    public static function register_post_type() {
        register_post_type( self::POST_TYPE, [
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_ui' => true,
            'has_archive' => true,
            'label' => '',
            'labels' => [
                'name'               => self::POST_TYPE,
                'singular_name'      => 'Product',
                'menu_name'          => 'Products', 
            ],
            'public' => true,
            'capability_type' => 'page',
            'supports' => [
                'title',
                'editor',
            ],
        ]);
        register_taxonomy('category', array( self::POST_TYPE ), array(
            'hierarchical'  => true,
            'labels'        => array(
                'name'              => _x( 'Categories', 'taxonomy general name' ),
                'singular_name'     => _x( 'category', 'taxonomy singular name' ),
                'search_items'      =>  __( 'Search category' ),
                'all_items'         => __( 'All Categories' ),
                'parent_item'       => __( 'Parent Categories' ),
                'parent_item_colon' => __( 'Parent Categories:' ),
                'edit_item'         => __( 'Edit Categories' ),
                'update_item'       => __( 'Update Categories' ),
                'add_new_item'      => __( 'Add New Categories' ),
                'new_item_name'     => __( 'New Genre Name' ),
                'menu_name'         => __( 'Categories' ),
            ),
            'show_ui'       => true,
            'query_var'     => true,
        ));
    }    

    public static function svg_upload_allow( $mimes ) {
        $mimes['svg']  = 'image/svg+xml';
        return $mimes;
    }

    public static function support_theme(){
        add_theme_support( 'post-thumbnails', array( 'post' ) );
    }

    public static function theme_register_nav_menu() {
        register_nav_menu( 'top', 'Top Menu' );
    }

    public static function image_size(){
        add_image_size( 'taxonomy-image-home', 578, 360, true );
        add_image_size( 'single-image-gallery', 640, 500, true );
        add_image_size( 'archive-image', 594, 370, true );
        add_image_size( 'jobs-image', 867, 599, true );
        add_image_size( 'background-image', 1920, 619, true );
        add_image_size( 'partners-image', 500, 330, true );
        add_image_size( 'advantages-image', 371, 478, true );
        add_image_size( 'partners-logo', 314, 176, true );
        add_image_size( 'story-ico', 256, 137, false );
        add_image_size( 'slider-main', 1920, 960, true );
        add_image_size( 'second-image', 640, 366, true );
        add_image_size( 'news-image', 415, 330, true );
        add_image_size( 'gall-image', 800, 600, true );
    }

}
