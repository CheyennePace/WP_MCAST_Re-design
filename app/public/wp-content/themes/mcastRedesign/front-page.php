<?php get_header(); ?>

<?php $banner_img_1 = get_theme_mod('custom_image_banner_1'); ?>
<?php $banner_img_2 = get_theme_mod('custom_image_banner_2'); ?>
<?php $prodmenu_img1= get_theme_mod('custom_image_prodmenu1'); ?>
<?php $prodmenu_img2= get_theme_mod('custom_image_prodmenu2'); ?>
<?php $prodmenu_img3= get_theme_mod('custom_image_prodmenu3'); ?>
<?php $prodmenu_img4= get_theme_mod('custom_image_prodmenu4'); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="d-block w-100" src="<?php  echo $banner_img_1;?>"">
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="<?php  echo $banner_img_2;?>" alt="Second slide">
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="<?php  echo $banner_img_3;?>" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
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