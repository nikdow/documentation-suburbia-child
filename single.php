<?php get_header(); ?>
<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php include (get_stylesheet_directory() . "/meta.php"); ?>        
    <div id="single">
        <?php if ( function_exists('yoast_breadcrumb') ) 
            {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
		<h1><?php the_title(); ?></h1>
		<?php
		if ( has_post_thumbnail() ) :
		echo the_post_thumbnail( 'large', array() );
		endif;
		the_content(); ?>

    <div id="comments">
        <?php comments_template(); ?>
    </div>

    </div>



	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>  

    <?php include (get_stylesheet_directory() . "/related.php"); ?>
              
<?php get_footer(); ?>
