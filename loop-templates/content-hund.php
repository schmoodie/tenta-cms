<?


/**
 * hundar content partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

the_content();
the_field('name');?>
<br>
<?the_field('age');?>
<br>
<?the_field('weight');
?> 

<a href="<?the_permalink()?>">Se mer av hund horan</a>