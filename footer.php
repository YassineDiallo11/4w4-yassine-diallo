<footer class="site__footer">


<div class="colonne1">
<section>Yassine Diallo</section>
<section>Conception d'interface et développement web</section>
</div>

<?php the_custom_logo() ?>
<div class="Choix">
<?php wp_nav_menu(array(
    "menu"=>"footer",
    "container"=>"nav"
     ))?>
</div>



<section>
    <div class="sidebar">
    <?php  dynamic_sidebar('footer_2'); ?>  
    </div>
</section>
<div class="Ligne"></div>

<div class="colonne2">
<section>
    <div class="sidebar">
    <?php  dynamic_sidebar('footer_1'); ?>  
    </div>
</section>
</div>



</footer>
<?php wp_footer(); ?>
