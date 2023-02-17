<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head(); ?>
<body>
<header class="site_header">
<section class="site_header_logo">
<?php the_custom_logo() ?>
<?php wp_nav_menu(array(
    
    "menu"=>"entete",
    "container"=>"nav"

    ))?>
</section>
   <h1><a href=" <?=bloginfo('url') ?>"><?=bloginfo('name') ?></a> </h1>
   <h2><?=  bloginfo('description') ?></h2>
</header>

