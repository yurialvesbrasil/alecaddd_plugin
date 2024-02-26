<?php 
/**
 * @package AlecaddPlugin
 */

namespace Inc\Pages;

/**
 * 
 */
 class Admin{

   function __construct(){}

   function register() {
      add_action( 'admin_menu', array($this, 'add_admin_pages') );
   }

   public function add_admin_pages() {
      add_menu_page( 
         'Alecadd Plugin', 
         'Alecadd', 
         'manage_options' , 
         'alecaddd_plugin', 
         array($this, 'admin_index'),
         'dashicons-store', 
         110 );
   }

   public function admin_index(){
      //required template
      require_once plugin_dir_path( __FILE__) . 'templates/admin.php';
   }
 }
 