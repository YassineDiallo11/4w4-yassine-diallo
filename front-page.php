<?php 
?>
<?php get_header();?>
<main>
   
    <section class="blocflex">
<?php 
if(have_posts()):
    while(have_posts()): the_post();?>
    <article>
    <h3>
    <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
    </h3>
    <?= wp_trim_words(get_the_excerpt(),5,"[...]"); ?>
   
 </article>
   <?php endwhile; 
endif;
?>
</section>
</main> 

<?php get_footer(); ?>