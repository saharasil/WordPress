<?php

// Zone de widgets
function eprojet_init_widgets(){
        //déclaration de la zone widget pour le titre h1 de la page d'accueil :
        register_sidebar(array(
            'name'             => 'Zone entête', //nom qui aparaît dans le BO
            'id'               => 'zone-entete', //identifiant unique de la zone
            'description'      => 'Ajoute des widgets à la zone entête de la page accueil', //description qui aparaît dans le BO
            'before_widget'    => '', //précise les balises avant le widget, ici on retire les <li> par défaut
            'after_widget'     => '', //précise les balises après le widget, ici on retire les </li> par défaut
            'before_title'     => '<h1>', //pour metter le titre du widget dans un <h1> au lieu d'un <h2> par défaut .
            'after_title'      =>'</h1>',
        ));

        register_sidebar(array(

            'name'             => 'Zone gauche footer', //nom qui aparaît dans le BO
            'id'               => 'zone-gauche-footer', //identifiant unique de la zone
            'description'      => 'Ajoute des widgets à la zone gauche de footer dans la page d\'accueil', //description qui aparaît dans le BO
            'before_widget'    => '<div>', //précise les balises avant le widget, ici on met des <div> par défaut
            'after_widget'     => '</div>', //précise les balises après le widget, ici on met des </div> par défaut
            'before_title'     => '', 
            'after_title'      =>'',




        ));







}


add_action('widgets_init','eprojet_init_widgets'); // On exécute notre  fonction  appelée "eprojet_init_widgets" quand  WP initialise les widgets du site : "widgets_init" s'appelle un HOOK (crochet en français) car y sont accrochées les fonctions du coeur de WP ainsi que la nôtre. Elles s'exéctent touts ensembles lors de l'exécution de ce hook.


//Zone de menus :
 function eprojet_init_menus() {
    register_nav_menu('primary', 'menu principale'); // déclare une zone de menu d'identifiant "primary" et de nom dans le BO "menu principale".


    //exercice
    register_nav_menu('secondary', 'menu footer');

 }

 add_action('init', 'eprojet_init_menus'); // on exécute notre fonction "eprojet_init_menus" dans le hook appelé "init" de WP s'initialise, il exécute notre fonction .