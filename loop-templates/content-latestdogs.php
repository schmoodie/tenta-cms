<?


/**
 * hundar content partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$dogs = new WP_Guery([
    'post_type' => 'hund', 'posts_per_page' => 2
]);

if($dogs->have_posts()) :
    
    while($dogs->have_posts()) : $dogs->the_post(); 

        
    endwhile;
endif;
