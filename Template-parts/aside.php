<aside class="site__aside">
    <h3 class="h3_changement">Menu secondaire</h3>
    <?php 
    $ma_categorie = "4w4" ;
    if(in_category('cours')){
        $ma_categorie = "cours" ;
    }
    wp_nav_menu(array(
        "menu"=> $ma_categorie, 
        "container"=> "nav")); ?>
</aside>
