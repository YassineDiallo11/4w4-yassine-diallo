<?php 
?>
<?php get_header();?>
<main>

<h3>Résultats de la recherche</h3>


<?php 
if(have_posts()):
    while(have_posts()): the_post();
     ?>
    <?= wp_trim_words(get_the_excerpt(),50,"[...]"); ?>
    
<hr>
   <?php endwhile; 
endif;
?>

</main> 

<?php get_footer(); ?>
