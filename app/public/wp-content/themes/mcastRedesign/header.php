<!DOCTYPE html>
<html <?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
<?php  
    $header_bg = get_theme_mod('custom_header_bg', '#000043');
    $header_txt = get_theme_mod('custom_header_txt', '#FFF');
    $header_logo = get_theme_mod ('custom_image');
    ?>

<div class="container-fluid" <?php echo $header_bg ?>>
    <div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <a " href="<?php echo esc_url(home_url('/')); ?>" >
                    <!--to go to homepage -->
                    <!-- <?php esc_html(bloginfo('name')); ?> -->
                    <img style="width:50%;" src="<?php  echo $header_logo; ?>" alt=" <?php esc_html(bloginfo('name')); ?>Homepage Link">
        </div>
        <div class="col-4">
        <nav id="-header-main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu'
            ));
            ?>
        </nav>
        </div>
        <div class="col-4"><?php get_search_form(true)?></div>
    </div>
    </div>  
            
    </div> 
</header>



