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
<div class="container-fluid">
        
        <nav class="navbar" style="    display: flex; flex-direction: row; flex-wrap: nowrap; align-items: center;">
            <!-- home_url is used to put the user straight into the homepage, can be found in wordpress  -->
            <a style="width: 64%;" href="<?php echo esc_url(home_url('/')); ?>" >
                    <!--to go to homepage -->
                    <!-- <?php esc_html(bloginfo('name')); ?> -->
                    <img style="width:8%;" src="https://pngimg.com/d/nike_PNG12.png" alt=" <?php esc_html(bloginfo('name')); ?>Homepage Link">
            </a>

            <?php get_search_form(true); ?>
        </nav>
    </div> 
</header>



