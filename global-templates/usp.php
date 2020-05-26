<?


/**
 * hundar content partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$dogs = new WP_Query([
  'post_type' => 'usp', 'posts_per_page' => 3
]);


while($dogs->have_posts()) : $dogs->the_post() ;

?>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?the_field('usp-title');?></h5>
        <p class="card-text"><?the_field('usp-content');?></p>
      </div>
    </div>
  </div>
<? endwhile;