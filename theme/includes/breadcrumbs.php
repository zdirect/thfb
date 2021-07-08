<?php 

class breadcrumbs{

    public static function init() {
        add_filter( 'rank_math/frontend/breadcrumb/html', [ __CLASS__, 'breadcrumbs_markup' ], 10, 2 );
        add_filter( 'rank_math/frontend/breadcrumb/items', [ __CLASS__, 'get_crumbs' ], 10, 2 );
    }

    public static function breadcrumbs_markup( $html, $crumbs ) {
        $links = array_chunk( $crumbs, count( $crumbs ) - 1 );
    
        $html = array_reduce( $links[ 0 ], function ( $list, $link ) {
            $list[] = '<a href="'. $link[ 1 ] .'">'. $link[ 0 ] .' </a> ';
            return $list;
        }, [] );
    
        $html[] = '<span>'. $crumbs[ count( $crumbs ) - 1 ][ 0 ] .'</span>';
    
        return implode( '', $html );
    } 
    
    public static function get_crumbs( $crumbs ) {
        // if( is_category() ){
        //     $crumbs[1] = [ 'Products', get_post_type_archive_link('products') ];
        //     $crumbs[2] = [  single_term_title(), 'text' ];
        // }
        // if ( is_singular('services') ){
        //     $home_link = pll_home_url();

        //     if( !get_locale() == 'ru_RU' ){
        //         $crumbs[0] = [ pll__('Главная'), $home_link ];
        //     }
        //     else{
        //         $crumbs[0] = [ pll__('Главная'), $home_link ];
        //     }

        //     $crumbs[1] = [ pll__('Услуги'), get_post_type_archive_link('services') ];

        //     $crumbs[2] = [ get_the_title(), get_the_permalink() ];

        //     return $crumbs;
        // }
        // else if( is_archive( 'services' ) ){
        //     $crumbs[1] = [ pll__('Услуги'), get_post_type_archive_link('services') ];
        //     return $crumbs;
        // }
        // else if( is_archive( 'checklist' ) ){
        //     //$crumbs[1] = [ pll__('Услуги'), get_post_type_archive_link('services') ];
        //     return $crumbs;
        // }
        // else if( is_singular('post') ){
        //     $crumbs[1] = [ pll__('Блог'), get_post_type_archive_link('post') ];
        //     return $crumbs;
        // }
        // else if( is_singular('checklist') ){
        //     $crumbs[1] = [ pll__('Чеклист'), get_permalink((new Id_Page_Template())->get_id_page('page-checklist.php')) ];
        //     $crumbs[2] = [ get_the_title(), get_the_permalink() ];
        //     return $crumbs;
        // }


        return $crumbs;

    }

    public function render(){
        echo $this->get_render();
    }

    public function get_render() { 
        $template = '
        <div class="breadcrumbs-item">
            '.rank_math_get_breadcrumbs().'
        </div>';
        return $template;
    }

}
