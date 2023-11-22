<?php get_header(); ?>
<div class="container">
	<div class="row">
<!-- The Loop -->
<?php 
	$args = array('section_title' => 'Home');
	get_template_part("template-parts/loop", null, $args);
?>
		
	</div>
</div>
<?php get_footer(); ?>