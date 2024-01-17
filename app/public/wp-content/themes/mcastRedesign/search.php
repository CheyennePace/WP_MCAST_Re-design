<?php get_header(); ?>

<!-- The Loop -->
<div class="container">
	<div class="row">
<?php $args = array('section_title' => 'Search Results'); ?>
	<div class="contnt-in-search" style="padding-bottom: 5%;">
	<?php get_template_part("template-parts/loop-search", null, $args);
	?>
	</div>
	

	</div>
</div>
<?php get_footer(); ?>