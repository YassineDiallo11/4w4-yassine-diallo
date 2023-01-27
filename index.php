<?php 
?>
<?php get_header();?>
<main>
<?php 
if(have_posts()):
    while(have_posts()): the_post();
    the_title('<h1>','<h2>');
    the_content();?>

   <?php endwhile; 
endif;
?>
</main> 
<?php get_footer(); ?>
