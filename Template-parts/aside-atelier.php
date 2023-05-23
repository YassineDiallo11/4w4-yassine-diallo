
 <aside> 
    <h3>Nos ateliers en 2023</h3>
    <?php 
    $ma_categorie  = "4w4";
    if (in_category('atelier')){
        $ma_categorie  = "atelier";
    }
    wp_nav_menu(array(
        "menu" => $ma_categorie,
        "container" => "nav"  
    )); ?>
     
</aside>