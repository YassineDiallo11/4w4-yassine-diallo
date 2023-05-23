<?php
/**
* template name: Atelier
*/
get_header(); ?>
<main class="MenuDescriptionAtelier">
<?php
if ( have_posts() ) : the_post(); ?>
<?php
the_post_thumbnail('thumbnail') ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<section class="Tableau">
<p>Date :  <?php the_field('date_'); ?></p>
<p>Heure : <?php the_field('heure_'); ?></p>     
<p>Durée : <?php the_field('duree_'); ?></p>
<p>Local : <?php the_field('local_'); ?></p>  
<p>Formateur : <?php the_field('formateur_'); ?></p>
</section>
<?php endif;?>
</main><!-- #main -->
<?php

get_footer();