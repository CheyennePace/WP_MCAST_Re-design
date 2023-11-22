<?php 
    function custom_customize_register($wp_customize){
        $wp_customize -> add_section('custom_footer_options', array(
            'title' => 'Footer Options',
            'description' => 'You can change footer options here'
        ));

        $wp_customize->add_setting('custom_footer_bg', array(
            'default' =>'dark',
            'sanitize_callback' =>'sanitize_text_field'
        ));

        $wp_customize->add_control('custom_footer_bg', array(
            'type'=>'select',
            'label'=>'Background Color',
            'choices'=>array(
                'light'=>'Light',
                'dark'=>'Dark'
            ),
            'section'=>'custom_footer_options'

        ));

        $wp_customize->add_setting('custom_theme_footer_bg',array(
            'default' => '#ffc107'
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
                'default'=> '#000',
            ));

            $wp_customize -> add_control(
                new WP_Customize_Color_Control($wp_customize, 'custom_theme_txt', array(
                    'label' => 'Choose Text Color',
                    'section' => 'custom_footer_options',
                    'settings' => 'custom_theme_txt'
    
                ))
            );

            $wp_customize->add_setting('custom_footer_widget_count',array(
                'default' => 2,
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

    add_action('customize_register', 'custom_customize_register');

?>