<?php
while (have_posts()) {
    the_post();
?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
    <br>
    <?php the_content() ?>
    <hr>
<?php }
?>