<?php
/* Template Name: Strona główna */
get_header();
?>
<div id="primary" class="blog-content">
    <main id="main">
        <div class="container posts-index">
            <div class="row">
              <div class="about-author col-xl-4">
                <div class="author-img-wrap">
                  <img src="wp-content/uploads/2018/08/aia.jpg" Alt="Author" />
                </div>
                <h3>Martin Keppler</h3>
                <p>Blog on private banking, finances and fitness, yo</p>
              </div>
                <?php
                  $counter = 1;
              		$args = array(
              			'post_type' => 'post',
              			'post_status' => 'publish',
              			'category_name' => 'Blog',
              			'posts_per_page' => 5
              		);
              		$arr_posts = new WP_Query( $args );

              		if ( $arr_posts->have_posts() ) :

              			while ( $arr_posts->have_posts() ) :
              				$arr_posts->the_post();
        				?>
        				<article id="post-<?php the_ID(); ?>" class="col-xl-8 post_<?php echo $counter; ?>">
                  <a href="<?php echo get_permalink( $post->ID ); ?>">
                    <div class="frontpage-thumbnail">
                      <?php
                      if ( has_post_thumbnail() ) :
                      the_post_thumbnail();
                      endif;
                      ?>
                    </div>
                    <div class="index-text">
                      <header class="entry-header">
                      <h2 class="entry-title"><?php the_title(); ?></h2>
                      </header>
                      <div class="entry-content">
                        <p>
                          <?php echo get_the_excerpt(); ?>
                          <strong>Czytaj więcej &raquo</strong>
                        </p>
                      </div>
                    </div>
                  </a>
        				</article>
        				<?php
                $counter++;
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
