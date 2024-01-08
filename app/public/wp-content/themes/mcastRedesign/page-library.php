<?php get_header(); ?>

<?php $banner_img_lib = get_theme_mod('custom_image_banner-library'); ?>

<!-- custom banner -->

<div class="container-fluid">
    <img src="<?php  echo $banner_img_lib;?>"" class="img-fluid" alt="Responsive image">
</div>

<!--custom search-->
<div id="book-search">
    <form action="<?php echo esc_url(home_url('/library')); ?>" id="searchform" method="get">
        <div style = "display: inline-flex; ">
            <label for="search" class="screen-reader-text">Search for:</label>
            <input type="text" id="search" name="search" value="" />
            <input type="hidden" name="post_type" value="book" /> 
            <input type="submit" value="Search" id="searchsubmit" />
        </div>
    </form>

    <?php
    add_action('parse_query', function($query){

        // not the search request
        if(!$query->is_search)
          return;
      
        // validate post type here (you should provide a white-list)
        $post_type = isset($_GET['post_type']) ? sanitize_key($_GET['post_type']) : false;
      
        // adjust the query
        if($post_type && post_type_exists($post_type))
          $query->set('post_type', $post_type);
      
      });
    
?>
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