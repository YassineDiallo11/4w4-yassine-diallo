<footer class="site__footer">
<div class="colonne1">
<?php the_custom_logo() ?>
<section>Yassine Diallo</section>
<section>Conception d'interface et développement web</section>

</div>
<div class="Choix">
<?php wp_nav_menu(array(
    "menu"=>"footer",
    "container"=>"nav"
     ))?>
</div>



<div class="Ligne"></div>

<div class="colonne2">
<section>
    <div class="sidebar">
    <?php  dynamic_sidebar('footer_1'); ?>  
    </div>
</section>

<section>
    <div class="sidebar">
    <?php  dynamic_sidebar('footer_2'); ?>  
    </div>
</section>

</div>
</footer>
<?php wp_footer(); ?>
