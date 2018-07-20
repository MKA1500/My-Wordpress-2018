<?php
/* Template Name: Strona główna */
get_header();
?>
<div id="primary" class="blog-content">
    <main id="main">
        <div class="container posts-index">
          <h1>Strona główna</h1>
            <div class="row">
                <?php
              		$args = array(
              			'post_type' => 'post',
              			'post_status' => 'publish',
              			'category_name' => 'Blog',
              			'posts_per_page' => 7
              		);
              		$arr_posts = new WP_Query( $args );

              		if ( $arr_posts->have_posts() ) :

              			while ( $arr_posts->have_posts() ) :
              				$arr_posts->the_post();
        				?>
        				<article id="post-<?php the_ID(); ?>" class="col-md-6 col-lg-4">
                  <a href="<?php echo get_permalink( $post->ID ); ?>">
                    <div class="frontpage-thumbnail">
                      <?php
                      if ( has_post_thumbnail() ) :
                      the_post_thumbnail();
                      endif;
                      ?>
                    </div>
                    <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    </header>
                    <div class="entry-content">
                    <?php get_excerpt(); ?>
                    </div>
                  </a>
        				</article>
        				<?php
        			endwhile;
        		endif;
        		?>
            </div>
            <div class="see-more">
                <a href="<?php echo get_option("siteurl") .'/blog'; ?>" role="button" class="btn btn-default">
                    Zobacz więcej
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </main>
</div>
<?php
get_footer();
?>
