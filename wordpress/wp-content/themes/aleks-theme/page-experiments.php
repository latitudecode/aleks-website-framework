<?php
/*
 * Template Name: Experiments
 * Description: List of posts
 */

//

?>

<?php get_header(); ?>


<body>

<!-- back btn -->
		<div class="back">
			<a href="index.html">back to home</a>
		</div>
<!-- end back btn -->

<div class="wrapper">

	<header>

	</header>

<!-- main content -->
	<div class="main-content page-list">
		<div class="row"> <!-- start row -->
			<div class="col-md-12">
				<h1>Lessons</h1>
			</div>
		</div> <!-- end row -->

		<div class="row"> <!-- start row -->
			 
			 <?php query_posts('cat=3'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress category loop -->

			<div class="col-md-4"> <!-- start three column -->
				<ul> <!-- start post list -->
					<li>
						<a class="btn" href="<?php the_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
						</a>
					</li>																							
				</ul> <!-- end post list -->
			</div>

				<?php endwhile; endif; wp_reset_query(); ?>	

		</div>
<!-- end main content -->

<?php wp_footer(); ?>