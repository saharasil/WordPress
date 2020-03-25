        </div>
    </section> <!-- ces deux balises fermantes sont ouvertes dans header.php -->
<footer class="align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                           
                                    <?php
                                        dynamic_sidebar('zone-gauche-footer');
                                    ?>
                            
               </div>
                <div class="col-lg-4">
                    <p>&copy; Mes petites annonces - 2020</p>
                </div>
                <div class="col-lg-4">
                    
                    <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'secondary', 
                            ));// cette fonction appelle la zone de menu déclarée dans le fichier functions.php
                            /* ou vous faitess directement :
                             wp_nav_menu('secondary'); 
                             on peut passer directement l'ID de la zone de menu en argument de cette fonction
                             */

                    ?>
                    
                
                
                </div>
            </div>

        </div> <!-- .container -->



</footer>
<!-- c'est ici que nous ferions le lien vers le JS Bootsrap.-->
<?php wp_footer();?> <!-- nécessaire à l'affichage de la barre d'admin côté front, et affiche les balises <script> insérées par une fonction depuis function.php avant la fermeture du <body>.-->
<!--
    </body>
</html>