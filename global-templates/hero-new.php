<?

    $img = get_field('image')?> 
    
    <section class="heroimg"style="background-image: url('<?echo $img['url']?>');">
        <?the_field('title')?>

    </section>

<?

?>