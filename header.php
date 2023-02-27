<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head(); ?>
<body class="site">
<header class="site__header">
<section class="site_header_logo">
   
<?php the_custom_logo() ?>

 
        <?php wp_nav_menu(array(
    
    "menu"=>"entete",
    "container"=>"nav"

    ))?>
    
    <?php get_search_form(); ?>

</section>

</header>

<aside class="site__aside">
    <h3 class="h3_changement">Menu secondaire</h3>
    <?php wp_nav_menu(array(
        "menu"=> "aside", 
        "container"=> "nav")); ?>
</aside>