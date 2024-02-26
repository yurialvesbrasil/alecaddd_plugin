<?php

/**
 * @package AlecaddPlugin
 */

/*
Plugin Name: Alecadd Plugin
Plugin URI: https://jukeboxs.online
Description: This plugin is a test of concept.
Version: 1.0.0
Author: Alessandro "Alecadd" Castellani
Author URI: https://jukeboxs.online
License: GPLv2 or later
Text Domain: alecaddd-plugin
*/

/*
If the program is interactive, make it output a short notice like this
when it starts in an interactive mode:

    Gnomovision version 69, Copyright (C) year name of author
    Gnomovision comes with ABSOLUTELY NO WARRANTY; for details type `show w'.
    This is free software, and you are welcome to redistribute it
    under certain conditions; type `show c' for details.

The hypothetical commands `show w' and `show c' should show the appropriate
parts of the General Public License.  Of course, the commands you use may
be called something other than `show w' and `show c'; they could even be
mouse-clicks or menu items--whatever suits your program.

You should also get your employer (if you work as a programmer) or your
school, if any, to sign a "copyright disclaimer" for the program, if
necessary.  Here is a sample; alter the names:

  Yoyodyne, Inc., hereby disclaims all copyright interest in the program
  `Gnomovision' (which makes passes at compilers) written by James Hacker.

  <signature of Ty Coon>, 1 April 1989
  Ty Coon, President of Vice

This General Public License does not permit incorporating your program into
proprietary programs.  If your program is a subroutine library, you may
consider it more useful to permit linking proprietary applications with the
library.  If this is what you want to do, use the GNU Lesser General
Public License instead of this License.
*/

// if(!defined('ABSPATH')){
//     die;
// }

defined('ABSPATH') OR die('Hey, you can\'t access this file, you silly human!');

// if (!function_exists('add_action')){
//     echo 'Hey, you can\'t access this file, you silly human!';
//     die;
// }

if( file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

if( class_exists('Inc\\Init')){
    Inc\Init::register_services();
}
