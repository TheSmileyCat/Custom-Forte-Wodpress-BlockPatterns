<?php
/**
 * Plugin Name: Forte Custom Block Patterns
 * Description: Adds user editable block patterns and CSS imported from an external source
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' )) exit;

function register_block_patterns()
{
    register_block_pattern('forte-custom-block-patterns/learn-music-blocks',
    array(
    'title'         => 'Imported Feature Block',
    'description'   => 'An Imported block using custom HTML and CSS',
    'blockTypes'    => array('core/paragraph', 'core/heading', 'core/buttons'),
    'categories'    => ['custom'],
    'content'       => '

    <!-- wp:group {"className:"learn music card"} -->
    <div class="learn-music card">

        <!-- wp:image {"sizeSlug":"small"} -->
        <figure class="wp-block-image size-small">
            <img src="assets/musicbox-icon-jungle.png" alt="Jungle Music Icon" class="card-icon">
        </figure>
        <!-- /wp:image -->

        <!-- wp:heading {"level":1} -->
        <h2>Jungle music</h2>
        <!-- /wp:heading -->


        <div class="center-stack">

        <!-- wp:paragraph -->
        <span class="label">Babies</span>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <span class="age-range">6 months - 3.5 yrs</span>
        <!-- /wp:paragraph -->

        </div>

        <!-- wp:paragraph -->
        <p>Jungle Music is Forte’s award winning early childhood music programme. Children are given the opportunity to experience a wide range of musical activities in a nurturing, safe environment.</p>
        <!-- /wp:paragraph -->

        <!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link">Book Trial</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:group -->
    '
    ),
    );
}   

add_action('init', 'register_block_patterns');