<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<?php 
$nouvelle_classe = "";
if(is_front_page()){
   $nouvelle_classe = 'no-aside';
}
?> 
<body class="site <?php echo (is_front_page()?' no-aside ' :'');?>">
<header class="site__header">
<section class="site_header_logo">
<?php the_custom_logo() ?>
<div class="menu__recherche">

<input type="checkbox" id="chkMenu">
    <?php wp_nav_menu(array(
    "menu"=>"entete",
    "container"=>"nav"
     ))?>
      
      <label class="ligneMenuBurger" class="burger" for="chkMenu"><img  src="https://cdn-icons-png.flaticon.com/512/5461/5461272.png" width="40" height="40"></label>
        <?php get_search_form(); ?>
    </div>
</section>
</header>
<?php 
if(! is_front_page()){
get_template_part("template-parts/aside");
} ?>