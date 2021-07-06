<?

class Hook_Default{

    const POST_TYPE = 'products';

    public static function init(){
        add_filter( 'upload_mimes', [__CLASS__, 'svg_upload_allow'] );
        add_action( 'after_setup_theme', [ __CLASS__, 'theme_register_nav_menu' ] );
        add_action( 'after_setup_theme', [ __CLASS__, 'image_size' ] );
        add_action( 'after_setup_theme', [ __CLASS__, 'support_theme' ] );
        add_action( 'init', [ __CLASS__, 'register_post_type'] );

    }

    public static function register_post_type() {
        register_post_type( self::POST_TYPE, [
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
        add_image_size( 'single-image', 387, 218, true );
    }

}
