<?php

namespace Inc;

//final -> Desabilita o extend da class
final class Init {
    
    /**
     * Store all the classes inside an array
     * @return array Full list of classes
     */
    public static function get_services(){
        return [
            Pages\Admin:class,
            Base\Enqueue:class,
            Base\SettingsLinks::class
        ];
    }

    /**
     * Loop through the classes, initialize them,
     * and call the register() method if it exists
     * @return 
     */
    public static function register_services(){
        // self:: -> para referênciar classes estáticas
        foreach( self::get_services() as $class ){
            $service = self::instantiate($class);
            if( method_exists ($service, 'register')){
                $service->register();
            }
        }
    }

    /** Inicialize the class
     * @param  class $class class from the services array
     * @return class instance new instance of the class
     */
    public static function instantiate($class){
        $service =  new $class(); 
        return $service;
    }

}

// use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\AdminPages;

// if( class_exists('AlecadddPlugin')){

//     class AlecadddPlugin {
//         // Public 
//         // can be accessed everywhere
//         public $plugin;

//         // Protected
//         // can be accessed only within the class itself or extension of that class

//         // Private
//         // can be accessed only within the class itself

//         function __construct(){
//             $this->plugin = plugin_basename( __FILE__ );
//         }

//         function register() {
//             add_action( 'admin_enqueue_scripts', array( $this, 'enqueue') );
//             add_action( 'admin_menu', array($this, 'add_admin_pages') );
//             add_filter( "plugin_action_links_$this->plugin",  array( $this, 'settings_link' ));
//         }

//         public function settings_link( $links ){
//             $settings_link = '<a href="admin.php?page=alecaddd_plugin">Settings</a>';
//             array_push( $links, $settings_link );
//             return $links;
//         }

//         public function add_admin_pages() {
//             add_menu_page( 
//                 'Alecadd Plugin', 
//                 'Alecadd', 
//                 'manage_options' , 
//                 'alecaddd_plugin', 
//                 array($this, 'admin_index'),
//                 'dashicons-store', 
//                 110 );
//         }

//         public function admin_index(){
//             //required template
//             require_once plugin_dir_path( __FILE__) . 'templates/admin.php';
//         }

//         function custom_post_type(){
//             register_post_type( 'book', ['public' => true, 'label' => 'Books']);
//         }

//         function activate(){
//             //require_once plugin_dir_path( __FILE__) . 'inc/alecaddd-plugin-activate.php';
//             Activate::activate();
//         }

//         function deactivate(){
//             //require_once plugin_dir_path( __FILE__) . 'inc/alecaddd-plugin-deactivate.php';
//             Deactivate::deactivate();
//         }

//         function enqueue(){
//             // enqueue all our scripts
//             wp_enqueue_style('mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ));
//             wp_enqueue_script('mypluginscript', plugin_url( '/assets/myscript.js', __FILE__));
//         }

//     }


//     $alecadddPlugin = new AlecadddPlugin();
//     $alecadddPlugin->register();

//     // activation plugin
//     register_activation_hook( __FILE__ , array( $alecadddPlugin , 'activate'));

//     // deactivation plugin
//     register_deactivation_hook( __FILE__, array( $alecadddPlugin , 'deactivate') );

// }