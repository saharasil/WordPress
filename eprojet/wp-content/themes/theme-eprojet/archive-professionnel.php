<?php
get_header();
  
?>
<div class="col-lg-12">
    <?php
    if(have_posts()) : 
        while(have_posts()) :the_post();
        ?>
            <h1>
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h1>
            <div class="info">
                <span>Code postale : </span><?php the_field('code_postale'); ?>
            </div>
            <div class="info">
                <span>Ville : </span><?php the_field('ville'); ?>
            </div>


        <?php
        endwhile;
        else :
            echo '<p>Aucun contenu ne correspond à votre demande';
    endif;
    ?>
</div>

<?php
get_footer();
?>