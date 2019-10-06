<?php get_header(); ?>

<article>
<?php
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
            endwhile; 
        
        else: echo'there are no posts';
        
        endif;
			?>
</article>

<?php get_footer(); ?>

<!-- git test  -->






