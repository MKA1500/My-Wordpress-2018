<?php
/* Template Name: Strona główna */
get_header();
?>
<div id="primary" class="blog-content">
    <main id="main">
        <div class="container posts-index">
            <div class="row">
              <div class="about-author col-lg-4">
                <div class="author-img-wrap">
                  <img src="wp-content/uploads/2018/07/export.png" Alt="Author" />
                </div>
                <h2>Martin Keppler</h2>
                <p>Blog on private banking, finances and fitness, yo</p>
              </div>
                <?php
                  $counter = 1;
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
        				<article id="post-<?php the_ID(); ?>" class="col-lg-8 post_<?php echo $counter; ?>">
                  <a href="<?php echo get_permalink( $post->ID ); ?>">
                    <div class="frontpage-thumbnail">
                      <?php
                      var_dump($post);
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
                      <?php echo substr(the_excerpt(),0, 10); ?>
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
