<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="custom-background">

<section class="Evenement">
    
<?php wp_nav_menu(array(
    "menu"=>"evenement",
    "container"=>"nav"
));?>
</section>

<section class="Archive">
 
<?php wp_nav_menu(array(
    "menu"=>"bloc-archive",
    "container"=>"nav"
));?>
</section>

<section class="Atelier">
    
<?php wp_nav_menu(array(
    "menu"=>"atelier",
    "container"=>"nav"
));?>
</section>






    <section class="blocflex">
    <?php
        if (have_posts()): 
            while (have_posts()) : the_post(); 
                if (in_category('galerie')){
                 //get_template_part("template-parts/categorie", "galerie");
                 the_content();
                }
                else {
                    get_template_part("template-parts/categorie", "4w4");  
                }
                    $ma_categorie = "4w4";
                    if (in_category('galerie')){
                        $ma_categorie = "galerie";  
                    }    
                    
             endwhile;
        endif;    
    ?>
    </section>
</main>
<?php get_footer(); ?>