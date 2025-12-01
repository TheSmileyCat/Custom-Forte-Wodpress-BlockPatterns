<?php
/**
 * Plugin Name: Forte Custom Block Patterns
 * Description: Adds user editable block patterns and CSS imported from an external source
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' )) exit;

//Function for registering block patterns
function register_block_patterns()
{

    // Load the pattern files from the patterns directory that end with .php
    $pattern_files = glob( plugin_dir_path(__FILE__).'patterns/*.php');
    
    foreach ($pattern_files as $file)
    {
        // Use the file name (without the .php extension) as the pattern slug
        $slug = 'forte-custom-block-patterns/'.basename($file, '.php');

        // Register the block pattern into wordpress
        register_block_pattern($slug,include $file);
    }
}

add_action('init', 'register_block_patterns');