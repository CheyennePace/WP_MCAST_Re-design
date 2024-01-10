<?php 
    //footer
    function custom_customize_register($wp_customize){
        $wp_customize -> add_section('custom_footer_options', array(
            'title' => 'Footer Options',
            'description' => 'You can change footer options here'
        ));

        $wp_customize->add_setting('custom_theme_footer_bg',array(
            'default' => '#000043'
        ));

        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize, 'custom_theme_footer_bg', array(
                'label' => 'Choose Theme Footer Background Color',
                'section' => 'custom_footer_options',
                'settings' => 'custom_theme_footer_bg'

            ))
        );
            //Text
            $wp_customize->add_setting('custom_theme_txt', array(
                'default'=> '#FFF',
            ));

            $wp_customize -> add_control(
                new WP_Customize_Color_Control($wp_customize, 'custom_theme_txt', array(
                    'label' => 'Choose Text Color',
                    'section' => 'custom_footer_options',
                    'settings' => 'custom_theme_txt'
    
                ))
            );

            $wp_customize->add_setting('custom_footer_widget_count',array(
                'default' => 3,
                'sanatize_callback'=>'sanatize_text_field'
            ));

            $wp_customize->add_control('custom_footer_widget_count',array(
                'type'=>'select',
                'label'=>'Footer Widget Count',
                'choices'=>array(
                    '1'=>'1 Column',
                    '2'=>'2 Columns',
                    '3'=>'3 Columns',
                    '4'=>'4 Columns',
                ),
                'section'=>'custom_footer_options'
                
            ));
        
    }

    //footer top
    function footertop_customize_register($wp_customize){
    
            //Text
            $wp_customize->add_setting('custom_theme_txt', array(
                'default'=> '#FFF',
            ));

            $wp_customize -> add_control(
                new WP_Customize_Color_Control($wp_customize, 'custom_theme_txt', array(
                    'label' => 'Choose Text Color',
                    'section' => 'custom_footer_options',
                    'settings' => 'custom_theme_txt'
    
                ))
            );

            $wp_customize->add_setting('custom_footer_row_count',array(
                'default' => 1,
                'sanatize_callback'=>'sanatize_text_field'
            ));

            $wp_customize->add_control('custom_footer_row_count',array(
                'type'=>'select',
                'label'=>'Footer Rows',
                'choices'=>array(
                    '1'=>'1 Row',
                    '2'=>'2 Row',
                    
                ),
                'section'=>'custom_footer_options'
                
            ));
        
    }




    //header
    function header_customize_register($wp_customize){
        $wp_customize -> add_section('custom_header_options', array(
            'title' => 'Header Options',
            'description' => 'You can change header options here'
        ));

        $wp_customize->add_setting('custom_header_bg', array(
            'default' =>'#F5F5F5',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control($wp_customize, 'custom_header_bg', array(
                'label' => 'Choose Background Color',
                'section' => 'custom_header_options',
                'settings' => 'custom_header_bg'

            ))

        );
        
         //Text
         $wp_customize->add_setting('custom_header_txt', array(
            'default'=> '#000043',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control($wp_customize, 'custom_header_txt', array(
                'label' => 'Choose Text Color',
                'section' => 'custom_header_options',
                'settings' => 'custom_header_txt'

            ))
        );

        $wp_customize->add_setting('custom_image', array(
            'default'=> '',
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'custom_image', array(
                'label' => 'Choose Image for logo',
                'section' => 'custom_header_options',
                'settings' => 'custom_image'
            ))
        );


        
    }


 //banner homepage
 function banner_customize_register($wp_customize){
    $wp_customize -> add_section('custom_banner_options', array(
        'title' => 'Homepage Banner Images Options',
        'description' => 'You can change the image inside the banner here'
    ));

    $wp_customize->add_setting('custom_image_banner_1', array(
        'default'=> '',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'custom_image_banner_1', array(
            'label' => 'Choose First Image for banner',
            'section' => 'custom_banner_options',
            'settings' => 'custom_image_banner_1'
        ))
    );

    $wp_customize->add_setting('custom_image_banner_2', array(
        'default'=> '',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'custom_image_banner_2', array(
            'label' => 'Choose Second Image for banner',
            'section' => 'custom_banner_options',
            'settings' => 'custom_image_banner_2'
        ))
    );

    $wp_customize->add_setting('custom_image_banner_3', array(
        'default'=> '',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'custom_image_banner_3', array(
            'label' => 'Choose Third Image for banner',
            'section' => 'custom_banner_options',
            'settings' => 'custom_image_banner_3'
        ))
    );
}

//banner library
function lib_img_customize_register($wp_customize){
    $wp_customize -> add_section('custom_image_banner-library', array(
        'title' => 'Library Banner Images Options',
        'description' => 'You can change the image for the banner'
    ));

    $wp_customize->add_setting('custom_image_banner-library', array(
        'default'=> '',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'custom_image_banner-library', array(
            'label' => 'Choose an image for the banner in the library page',
            'section' => 'custom_image_banner-library',
            'settings' => 'custom_image_banner-library'
        ))
    );
}



    add_action('customize_register', 'custom_customize_register');
    add_action('customize_register', 'header_customize_register');
    add_action('customize_register', 'banner_customize_register');
    add_action('customize_register', 'lib_img_customize_register');
    add_action('customize_register', 'footertop_customize_register');
    
?>