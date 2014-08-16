<?php
/**
 * Template Name: page-contacts
 *
 * 
 *
 * @package tweedthree
 */


get_header(); ?>
 <script type="text/javascript">
            jQuery(function() {
    jQuery('.col-1-3').matchHeight();
});
            
        </script>

	<div id="primary" class="content-area">
		<main id="main" class="site-main grid" role="main">

<?php
          $loop = new WP_Query(array('post_type' => 'contacts',
          'posts_per_page' => 10,
          'orderby'=>'title',
           'order'=>'ASC',
          ));
     ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
     <?php    
          $custom = get_post_custom($post->ID);
          $screenshot_url = $custom["screenshot_url"][0];
          $website_url = $custom["website_url"][0];
     ?>
             
<div class="col-1-3">
	<div class="module-contact">
		<h4 class="underline-dashed"><?php //the_title(); ?></h4>
	<?php the_post_thumbnail(); ?> </a>

<?php get_template_part( 'content', 'page' ); ?>
</div><!--module-->
	</div><!--col-->
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
