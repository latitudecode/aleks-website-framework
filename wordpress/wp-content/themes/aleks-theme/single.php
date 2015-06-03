<?php get_header(); ?>


<body>

<!-- back btn -->
		<div class="back">
			<a href="page-list.html">back to lessons</a>
		</div>
<!-- end back btn -->

<div class="wrapper">

	<header>

	</header>

<!-- main content -->
	<div class="main-content">

		<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
		<!-- start the Wordpress post -->

		<div class="row post-content"> <!-- start row -->
			<div class="col-md-12"> <!-- start three column -->
				<h1><?php the_title(); ?></h1>
			</div>						
		</div> <!-- end row -->
		<div class="row post-content"> <!-- start row -->
			<div class="col-md-12"> <!-- start three column -->
				<p>
					<?php the_content(); ?>	
				</p>
			</div>						
		</div> <!-- end row -->	
		<?php endwhile; endif; wp_reset_query(); ?>	
		<!-- end wordpress post -->
			
	</div>
<!-- end main content -->

<?php wp_footer(); ?>