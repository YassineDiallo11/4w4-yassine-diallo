<?php 
?>
<?php get_header();?>
<main>
<h3>single.php</h3>
<?php 
if(have_posts()):
    while(have_posts()): the_post();
   echo '<h1>' . get_the_title() . '</h1>' ;

   // the_content();?>

   <?php endwhile; 
endif;
?>
</main> 
<?php get_footer(); ?>
