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
    $header_bg = get_theme_mod('custom_header_bg', '#F5F5F5');
    $header_txt = get_theme_mod('custom_header_txt', '#000045');
    $header_logo = get_theme_mod ('custom_image');
    ?>

<div class="container-fluid" <?php echo $header_bg ?>>

    <div class="container-fluid">
    <div class = "top-bar">
            <a class="li-topbar" href="https://intranet.mcast.edu.mt/">Staff Portal</a>
            <a class="li-topbar" href="https://mcast.classter.com/">Student Portal</a> 
      
    </div>
    <div class="row" style="background-color: <?php echo $header_bg; ?>;> ">
        
        <div class="col-5" >
            <a " href="<?php echo esc_url(home_url('/')); ?>" style="color:<?php echo $header_txt; ?>"  >
                    <!--to go to homepage -->
                    <!-- <?php esc_html(bloginfo('name')); ?> -->
                    <img style="width:30%;" src="<?php  echo $header_logo; ?>" alt=" <?php esc_html(bloginfo('name')); ?>Homepage Link">
        </div>
        <div class="mid-content">
        <nav id="header-main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu'
            ));
            ?>
        </nav>
        </div>
        <div class="col-5" id="search"><?php get_search_form(true)?></div>
    </div>
    </div>  
            
    </div> 
</header>



