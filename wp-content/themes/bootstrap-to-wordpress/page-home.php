<?php
/*
    Template Name: Home Page
*/

// Custom Fields


// ACF


get_header();
?>

<?php 
    get_template_part( 'template-parts/home/content', 'hero' );
    get_template_part( 'template-parts/home/content', 'optin' );
    get_template_part( 'template-parts/home/content', 'boost' ); 
    get_template_part( 'template-parts/home/content', 'benefits' ); 
    get_template_part( 'template-parts/home/content', 'coursefeatures' ); 
    get_template_part( 'template-parts/home/content', 'projectfeatures' );
    get_template_part( 'template-parts/home/content', 'featurette' ); 
    get_template_part( 'template-parts/home/content', 'instructor' ); 
    get_template_part( 'template-parts/home/content', 'testimonials' ); 
?>

<?php
get_footer();