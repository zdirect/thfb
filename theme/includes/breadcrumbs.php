<?php 

class breadcrumbs{

    public static function init() {
        add_filter( 'rank_math/frontend/breadcrumb/items', [ __CLASS__, 'get_crumbs' ], 10, 2 );
        add_filter( 'rank_math/frontend/breadcrumb/html', [ __CLASS__, 'breadcrumbs_markup' ], 10, 2 );
    }

    public static function breadcrumbs_markup( $html, $crumbs ) {
        $links = array_chunk( $crumbs, count( $crumbs ) - 1 );
    
        $html = array_reduce( $links[ 0 ], function ( $list, $link ) {
            $list[] = '<a href="'. $link[ 1 ] .'">'. $link[ 0 ] .' </a> ';
            return $list;
        }, [] );
        if( is_category() ){
            $html[] = '<span>'.single_term_title(null, false).'</span>';
        }
        else{
            $html[] = '<span>products</span>';
        }
    
        return implode( '', $html );
    } 
    
    public static function get_crumbs( $crumbs ) {
        if( is_category() ){
            $cat = get_queried_object();
            if( 0 < $cat->category_parent ){
                $res = array_slice($crumbs, 0, 1, true) +
                array( 3 => array( 'products', get_post_type_archive_link('products')) ) +
                array_slice($crumbs, 1, count($crumbs) - 1, true) ;
                return $res;
            }
            else{
                $res = array_slice($crumbs, 0, 1, true) +
                array( 2 => array( 'products', get_post_type_archive_link('products')) ) +
                array_slice($crumbs, 1, count($crumbs) - 1, true) ;
                return $res;
            }
        }
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
