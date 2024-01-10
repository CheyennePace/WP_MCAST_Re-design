<?php
     function firstexample_sidebar_widgets(){
        register_sidebar(array(
            'id' => 'primary-sidebar',
            'name' => 'Primary Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '</section id="%1$s" class="sidebar-widget">',
            'after_widget' => '</section>',
        ));  

        register_sidebar(array(
            'id' => 'second-sidebar',
            'name' => 'Second Sidebar',
            'description' => 'Second Sidebar for blog posts page',
            'before_widget' => '</section id="%1$s" class="sidebar-widget">',
            'after_widget' => '</section>',
        ));  

        register_sidebar(array(
            'id' => 'top-footer-sidebar',
            'name' => 'Top Footer Sidebar',
            'description' => 'Top Footer',
            'before_widget' => '</section id="%1$s" class="sidebar-widget">',
            'after_widget' => '</section>',
        ));  
     }

     function custom_footer_sidebars(){
        $footer_layout = get_theme_mod('custom_footer_widget_count','2');

        for($i=0; $i<$footer_layout; $i++){
            register_sidebar(array(
                'id' => 'footer-sidebar-'.($i+1),
                'name' => 'Footer Sidebar '.($i+1),
                'description' => 'Footer for blog posts page',
                'before_widget' => '</section id="%1$s" class="footerr-widget">',
                'after_widget' => '</section>',
            )); 
        }
     }

     add_action('widgets_init','firstexample_sidebar_widgets');
     add_action('widgets_init','custom_footer_sidebars');
?>