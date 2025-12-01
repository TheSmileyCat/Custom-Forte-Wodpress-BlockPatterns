<?php

if ( ! defined( 'ABSPATH' )) exit;

$content_array = array(
    'title'         => 'Imported Feature Block',
    'description'   => 'An Imported block using custom HTML and CSS',
    'blockTypes'    => array('core/paragraph', 'core/heading', 'core/buttons'),
    'categories'    => ['custom'],
    'content'       => '

    <!-- wp:group {"className:"learn-music card"} -->
    <div class="learn-music card">

        <!-- wp:image {"sizeSlug":"small"} -->
        <figure class="wp-block-image size-small">
            <img src="assets/musicbox-icon-jungle.png" alt="Jungle Music Icon" class="card-icon">
        </figure>
        <!-- /wp:image -->

        <!-- wp:heading {"level":1} -->
        <h1>Jungle music</h1>
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
);

return $content_array;