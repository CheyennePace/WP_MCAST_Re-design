
<?php get_header(); ?>

<div class="container-library12345">
	<div class="row-lib">
		<!-- The Loop -->
		<?php 
			$args = array('section_title' => '');
			get_template_part("template-parts/loop", null, $args);
		?>
		
	</div>
</div>
<?php get_footer(); ?>