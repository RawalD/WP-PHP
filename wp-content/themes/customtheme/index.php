<?= get_header();



while ( have_posts() ) : the_post();
    // Display post
?>
    <h2><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h2>
    <p> <?= the_content() ?> </p>
    <hr>

<?php
    endwhile;

get_footer();

    
?>