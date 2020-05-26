<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
    <section id="single-dog-content">
        <h1><?the_field('name');?></h1>
        <br>
        <?the_field('description');?>
        <br>
        <?the_field('gender');?>
        <br>
        <?the_field('weight');
        ?><br><?
        the_field('color');
        ?><br><?
        the_field('age');
        ?><br><?
        the_field('adobted');
?>
    </section>



