<?


/**
 * hundar content partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

the_content();
$img = get_field('image');
?>

<section class="col-sm">
<div class="card" style="width: 18rem;">

  <img class="card-img-top" src="<?echo $img['url']?>" alt="Card image cap">

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



