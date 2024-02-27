<?php 
/**
 * @package AlecaddPlugin
 */

namespace Inc\Base;

/**
 * 
 */
 class Enqueue{

   function register() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue') );
   }

   function enqueue(){
        // enqueue all our scripts
        wp_enqueue_style('mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ));
        wp_enqueue_script('mypluginscript', plugin_url( '/assets/myscript.js', __FILE__));
    }


 }