<?php

while (have_posts()) : the_post();
    // Display post
?>
<h1>This is a PAGE</h1>
    <h2><?= the_title() ?></h2>
    <p> <?= the_content() ?> </p>
    

<?php
endwhile;

?>