<?php get_header(); ?>

<!-- The Loop -->

<!-- <h1>Index</h1> -->

<div class="container">
	<div class="row">
		<div class="posts">
			<?php if(have_posts()) : while (have_posts()) : the_post() ?> <!-- have_posts() checks if there is posts to show / : is the sameas {} -->

				<?php 
					the_content(); 
					endwhile;
					endif;
				?>
		</div>	
		<div class="col-4">
			<!-- Prepped for Sidebar -->
		</div>
	</div>
</div>
<?php get_footer(); ?>