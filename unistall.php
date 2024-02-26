<?php

/**
 * Trigger this file on Plugin uninstall 
 * 
 * @package AlecadddPlugin
 * /
 
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Clear Database stored data
$books = get_posts( array( 'post_type' => 'book', 'numberposts' => -1 ) );

foreach ( $books as $book ){
    wp_delete_post( $book->ID, true );
}

// Access the database via SQL
// Forma insegura de acesso ao banco
// global $wpdb;
// $wpdb->query( "DELETE FROM wp_posts WHERE port_type = 'book'");
// Remove os meta dados que não tiver mais referencia com algum post
// $wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
// $wpdb->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)" );



