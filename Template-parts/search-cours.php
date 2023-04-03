<?php
$titre = get_the_title();
$sigle = substr($titre,0,7);
$titre_long = substr($titre,7,-5);
$duree = substr($titre,strpos($titre,'('))?>


<article class="search" > 
    <div class="search_1">
    <h3><a href="<?php the_permalink(); ?>"> 
    <?= $sigle ?></a></h3> <h5>
        <?= $titre_long ?></h5> <p>
           
            <h5><?= $duree ?></h5>
        
        <p>Enseignant: <?php the_field('enseignant')?></p>
        <br>Domaine: <?php the_field('domaine')?></br>
        </div>
       

        <div class="search_2">
        <?= wp_trim_words(get_the_excerpt(), 15) ?></p>
        </div>
        </article>