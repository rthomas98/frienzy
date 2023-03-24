<?php

if ( get_field( 'blocks' ) ) :

    while ( has_sub_field( 'blocks', get_the_ID() ) ) :

        if ( get_row_layout() == 'home_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/home-banner.php' );
        endif;

        if ( get_row_layout() == 'black_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/black-banner.php' );
        endif;

        if ( get_row_layout() == 'map_section' ):
            include( get_stylesheet_directory() . '/acf-blocks/map-section.php' );
        endif;

        if ( get_row_layout() == 'features' ):
            include( get_stylesheet_directory() . '/acf-blocks/features.php' );
        endif;

    endwhile;
endif;
?>