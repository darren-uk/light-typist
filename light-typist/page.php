<?php get_header(); ?>
<article>

<?php

if (have_posts()):
    while (have_posts()):the_post(); ?>

    <div class="page">
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to
                <?php the_title(); ?>"><?php the_title(); ?></a></h2>
             
                <?php the_content() ?>
</div>

<?php endwhile;

else:
    echo '<p>There are no pages!</p>';
endif;

?>

</article>
<?php
get_footer();

?>
