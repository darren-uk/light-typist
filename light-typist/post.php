<div class="post">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to
                <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-date"><?php the_date(); ?></div>
                <div class="author">Written by <span><?php the_author(); ?><span></div>
                <div class="categories"><?php the_category(' | '); ?></div>
                <div class="post-container">
                    <div class="post-feature-image"><?php  the_post_thumbnail(); ?></div>
                    <?php the_content(); ?>
                </div>
            </div>


            