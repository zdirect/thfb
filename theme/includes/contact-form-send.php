<?php

class Contact_Form_Send{

    const POST_TYPE = 'orders';

    public static function init(){
        add_action( 'init', [ __CLASS__, 'register_post_type'] );
        add_action( 'wp_ajax_orders', [ __CLASS__, 'form_orders' ] );
        add_action( 'wp_ajax_nopriv_orders',  [__CLASS__, 'form_orders' ] );
        add_action( 'acf/init', [ __CLASS__, 'register_option' ] );
    }

    public static function register_option(){
        acf_add_options_sub_page( [
            'page_title' => __( 'Orders', 'thfb_theme' ),
            'menu_title' => __( 'Orders', 'thfb_theme' ),
            'menu_slug' => 'mail-menu',
            'parent_slug' => 'edit.php?post_type=orders',
        ]);
    }

    public static function register_post_type() {
        register_post_type( self::POST_TYPE, [
            'label' => '',
            'labels' => [
                'name'               => 'Orders',
                'singular_name'      => 'Orders',
            ],
            'public' => true,
            'menu_icon' => 'dashicons-id',
            'capability_type' => 'page',
            'supports' => [
                'title',
                'editor',
            ],
        ]);
    }

    public static function form_orders(){

        $formdata = filter_input_array( INPUT_POST );

        if (!function_exists('wp_handle_upload')) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
        }
        $file = $_FILES['file'];
        $overrides = [ 'test_form' => FALSE ];
        $movefile = wp_handle_upload( $file, $overrides );
        $file_links['file'] = $movefile['url'];

        $form_data = $formdata + $file_links;

        if( !$form_data) wp_send_json_error();

        unset( $form_data['action'] );
        unset( $form_data['privacy'] );

        $order_id = wp_insert_post([
            'post_type' => self::POST_TYPE,
            'post_title' => 'New order '.$form_data['name'],
            'post_content' => json_encode( $form_data, JSON_UNESCAPED_UNICODE )
        ]);

        wp_update_post([
            'ID' => $order_id,
            'post_title' => '#'. $order_id .' - Order '. $form_data['name'],
            'post_status' => 'publish',
        ]);

        self::mail_send( $form_data );

        wp_send_json_success();


    } 

    public function mail_send( $formdata ){

        $to = get_field('mail', 'option')['text']?:'zsdirect7@gmail.com';
        $subject = 'Message from THFB';

        $message[] = '<caption>'. $formdata->name .'</caption>';

        foreach ( $formdata as $name => $value ) {
            $message[] = '<tr><td style="text-transform: uppercase;">'. $name .'</td><td>'. $value .'</td>';
        }

        $message = '<table>'. implode( '', $message ) .'</table>';
        $headers = [
            'Content-Type: text/html; charset=UTF-8',
        ];

        wp_mail( $to, $subject, $message, $headers );
    }


}
