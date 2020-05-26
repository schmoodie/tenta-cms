<?


/**
 * hundar content partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



$dogs = new WP_Query([
    'post_type' => 'hund', 'posts_per_page' => 2 
]);

$image = get_field('image');

if($dogs->have_posts()) :
    
    while($dogs->have_posts()) : $dogs->the_post(); ?>
           
           <section class="col-sm">
            <div class="card" style="width: 18rem;">

                
                <? if(!empty($image) ) : ?>
                    <img class="card-img-top" src="<? echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); ?>">
                <? endif; ?>
                    <div class="card-body">

                        <h5 class="card-title"><?the_field('name');?></h5>
                        <p class="card-text"><?the_field('gender');?></p>

                            <!-- buttons -->
                        <a href="<?the_permalink()?>" class="btn btn-primary"><?_e('Se mer','sprak.pot')?></a>
                        <br>
                        <? $genders = get_the_terms($post->ID, 'genders'); /* Fetching the dogs gender */
                            foreach ($genders as $gender) {
                                $links_gender = get_term_link($gender);
                                echo '<a href="' . esc_url($links_gender) . '" class="btn">' . $gender->name . '</a>';
                            
                            }?>
                        <? $cities = get_the_terms($post->ID, 'cities'); /* Fetching the dogs city */
                            foreach ($cities as $city) {
                                $links_city = get_term_link($city);
                                echo '<a href="' . esc_url($links_city) . '" class="btn">' . $city->name . '</a>';
                            
                            }?>

                    </div>
            </div>
</section>
        <?
    endwhile;
endif;
