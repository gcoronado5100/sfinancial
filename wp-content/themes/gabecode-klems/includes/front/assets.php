<?php

if (!function_exists('gabecode_enqueue_scripts')) {
    function gabecode_enqueue_scripts() {

        // Swiper 
        wp_enqueue_style('swiper', GABECODE_THEME_URI . '/assets/libs/swiper/css/swiper-bundle.min.css', array(), '9.4.1');
        wp_enqueue_script('swiper', GABECODE_THEME_URI . '/assets/libs/swiper/js/swiper-bundle.min.js', array('jquery'), '9.4.1', true);

        // Fancybox
        wp_enqueue_style('fancybox', GABECODE_THEME_URI . '/assets/libs/fancybox/fancybox.css', array(), '5.0.0');
        wp_enqueue_script('fancybox', GABECODE_THEME_URI . '/assets/libs/fancybox/fancybox.umd.js', array('jquery'), '5.0.0', true);

        // Lottie - Animated Icons
        wp_enqueue_script('lottie', GABECODE_THEME_URI . '/assets/libs/lottie/lottie-web.min.js', array('jquery'), '5.13.0', true);

        // Theme Assets
        wp_enqueue_style('main', GABECODE_THEME_URI . '/assets/app/css/main.css', array(), GABECODE_THEME_VERSION);
        wp_enqueue_script('main', GABECODE_THEME_URI . '/assets/app/js/main.min.js', array('jquery'), GABECODE_THEME_VERSION, true);
        
    }
}
