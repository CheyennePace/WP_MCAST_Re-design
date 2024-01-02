<?php get_header(); ?>
<?php $banner_img = get_theme_mod('custom_image_banner'); ?>


<div class="container">
	<div class="row">
	
		<!-- The Loop -->
		<?php 
			$args = array('section_title' => 'Home');
			get_template_part("template-parts/loop", null, $args);
		?>
		
		<!--banner -->
		<div class= "banner-img"  >
			<img style="width:100%;" src="<?php  echo $banner_img;?> " alt="banner">
			
		</div>
		
	</div>
</div>
<?php get_footer(); ?>