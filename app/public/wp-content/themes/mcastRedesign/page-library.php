<?php get_header(); ?>

<?php $banner_img_lib = get_theme_mod('custom_image_banner-library'); ?>

<!-- custom banner -->

<div class="container-fluid">
    <img src="<?php  echo $banner_img_lib;?>"" class="img-fluid" alt="Responsive image">
</div>




<div class="container">
	<div class="row">
	
		<!-- The Loop -->
		<?php 
			$args = array('section_title' => '');
			get_template_part("template-parts/loop", null, $args);
		?>
		
	</div>
</div>
<?php get_footer(); ?>