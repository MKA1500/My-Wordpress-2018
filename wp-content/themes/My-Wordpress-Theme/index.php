<?php

get_header();
?>
    <main class="mainWrapper">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>

                <div class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
                </div>

            <?php endwhile;

        else:
            echo '<p>No content found</p>';

        endif;

        ?>
    </main>
<?php
get_footer();

?>