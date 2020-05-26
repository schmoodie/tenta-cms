
<?
$success = new WP_Query([
    'post_type' => 'success', 'posts_per_page' => 2
]);

 if($success->have_posts() ) : 
    while($success->have_posts()) : $success->the_post(); 
        get_template_part( 'loop-templates/content-sucess');
    endwhile;
endif;
?>