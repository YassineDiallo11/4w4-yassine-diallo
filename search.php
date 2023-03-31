
<?php get_header();?>
<main class="site__main">

<h3 class="Titre">Résultats de la recherche</h3>

<?php
        if (have_posts()): 
            while (have_posts()) : the_post(); 
          the_title('<h4>','</h4>');
             wp_trim_words(get_the_excerpt(),40,"[...]"); 
                if (in_category('cours')){
                
                 the_content();
                }
                else {
                    get_template_part("template-parts/search", "4w4");  
                }
                    $ma_categorie = "4w4";
                    if (in_category('cours')){
                        $ma_categorie = "cours";  
                    }    

             endwhile;
        endif;    
    ?>
</main> 

<?php get_footer(); ?>





