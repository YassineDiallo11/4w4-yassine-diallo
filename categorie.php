<?php 
?>
<?php get_header();?>
<main>
    <h3>category.php</h3>
    <section class="blocflex">
<?php 
if(have_posts()):
    while(have_posts()): the_post();?>
    <article>
    <h1>
    <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
    </h1>
   
 
 </article>
   <?php endwhile; 
endif;
?>
</section>
</main> 
<?php get_footer(); ?>