<?php get_header(); ?>

<!-- main content -->
	<div class="main-content">
		<div class="main-entries row"> <!-- start row -->
			<div class="col-md-4 studies"> <!-- start three column -->
				<h2>Studies</h2>
				<p>coming soon</p>
			</div>

			<!-- start page loop -->
			<?php query_posts('post_type=page&p=5'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

			<div class="col-md-4 lessons">
				<h2>Lessons</h2>
				<a class="btn" href="<?php the_permalink(); ?>">read more</a>			
			</div>

			<?php endwhile; endif; wp_reset_query(); ?>	
			<!-- end page loop -->

			<div class="col-md-4 experiments"> <!-- end three column -->
				<h2>Experiments</h2>
				<p>coming soon</p>			
			</div>						
		</div> <!-- end row -->
	</div>
<!-- end main content -->

<?php wp_footer(); ?>



