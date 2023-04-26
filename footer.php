<footer class="site__footer">


        
    <div class="logo"> <?php the_custom_logo() ?>

</div>
<div class="Choix">
<?php wp_nav_menu(array(
    "menu"=>"footer",
    "container"=>"nav"
     ))?>

</div>
<section class="Description">
    <div class="sidebar">
    <?php  dynamic_sidebar('footer_2'); ?>  
    </div>
</section>

</div>
<section class="colonne2">
    <div class="sidebar">
    
    <?php  dynamic_sidebar('footer_1'); ?>  
    </div>

</section>
<div class="Ligne"></div>
<p>Yassine Yasmina Diallo</p>
</footer>
<?php wp_footer(); ?>
