<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charet'); ?>">
	<meta name="viewport" content="width=device-width" />
	<title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  
<body <?php body_class(); ?>>

<div class="wrapper">

<header class="site-header">
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<h5><?php bloginfo('description'); 
if (is_page('redakcja')) {?> - poznaj naszą redakcję <?php } ?></h5>

    <nav class="site-nav">
	    <?php
		    $args = array(
			    'theme_location' => 'primary'			
			);
		?>
	    <?php wp_nav_menu($args); ?>
	</nav>

</header>
<?php
if (have_posts()) :
   while (have_posts()) : the_post(); ?>
  
 <div class="post page">  
   <h2><?php the_title(); ?></h2>
 
     <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
   </div>

   <?php endwhile;

   else: 
      echo '<p>No content found</p>';

   endif;
   
get_footer();

?>