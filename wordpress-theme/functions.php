<?php
// Theme setup
function champions_mindset_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'champions_mindset_setup');

// Enqueue styles and scripts
function champions_mindset_scripts() {
    wp_enqueue_style('champions-mindset-style', get_stylesheet_uri());
    
    // Enqueue custom JavaScript
    wp_enqueue_script('champions-mindset-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'champions_mindset_scripts');

// Customizer settings
function champions_mindset_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => 'Hero Section',
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('main_title', array(
        'default' => 'Champions Mindset',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('main_title', array(
        'label' => 'Main Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('main_subtitle', array(
        'default' => 'Blueprint Masterclass',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('main_subtitle', array(
        'label' => 'Main Subtitle',
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => '🔥 Eliminate Procrastination & Unlock Peak Performance',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => 'Hero Subtitle',
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_description', array(
        'default' => 'Without Willpower. Without Discipline. Just Science-Backed Mindset Shifts.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label' => 'Hero Description',
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('urgency_text', array(
        'default' => 'Limited Free Slots Available',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('urgency_text', array(
        'label' => 'Urgency Text',
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    // Event Details Section
    $wp_customize->add_section('event_details', array(
        'title' => 'Event Details',
        'priority' => 31,
    ));
    
    $wp_customize->add_setting('event_date', array(
        'default' => 'Monday, 22nd June 2025',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('event_date', array(
        'label' => 'Event Date',
        'section' => 'event_details',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('event_time', array(
        'default' => '5:00 PM to 6:30 PM IST',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('event_time', array(
        'label' => 'Event Time',
        'section' => 'event_details',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('host_name', array(
        'default' => 'Nvaya H Mohata',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('host_name', array(
        'label' => 'Host Name',
        'section' => 'event_details',
        'type' => 'text',
    ));
    
    // Header Section
    $wp_customize->add_section('header_section', array(
        'title' => 'Header',
        'priority' => 29,
    ));
    
    $wp_customize->add_setting('header_title', array(
        'default' => 'Champions Mindset',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('header_title', array(
        'label' => 'Header Title',
        'section' => 'header_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('header_subtitle', array(
        'default' => 'Blueprint Masterclass',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('header_subtitle', array(
        'label' => 'Header Subtitle',
        'section' => 'header_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('header_date', array(
        'default' => 'June 22, 2025',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('header_date', array(
        'label' => 'Header Date',
        'section' => 'header_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('header_time', array(
        'default' => '5:00 PM IST',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('header_time', array(
        'label' => 'Header Time',
        'section' => 'header_section',
        'type' => 'text',
    ));
    
    // Site Description
    $wp_customize->add_setting('site_description', array(
        'default' => 'Join the FREE Champions Mindset Blueprint Masterclass. Learn science-backed mindset shifts to eliminate procrastination and unlock peak performance without willpower or discipline.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('site_description', array(
        'label' => 'Site Description (Meta)',
        'section' => 'title_tagline',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'champions_mindset_customize_register');

// Remove unnecessary WordPress features for landing page
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

// Custom post type for testimonials (optional)
function create_testimonial_post_type() {
    register_post_type('testimonial',
        array(
            'labels' => array(
                'name' => 'Testimonials',
                'singular_name' => 'Testimonial'
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-format-quote'
        )
    );
}
add_action('init', 'create_testimonial_post_type');

// Contact Form 7 integration helper
function champions_mindset_contact_form_success() {
    if (isset($_GET['contact-form-sent'])) {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                // Show success modal or redirect
                alert("Registration successful! You will receive confirmation details shortly.");
            });
        </script>';
    }
}
add_action('wp_footer', 'champions_mindset_contact_form_success');

// Add custom CSS for Contact Form 7 styling
function champions_mindset_contact_form_styles() {
    echo '<style>
        .wpcf7-form input[type="text"],
        .wpcf7-form input[type="email"],
        .wpcf7-form input[type="tel"],
        .wpcf7-form select,
        .wpcf7-form textarea {
            width: 100% !important;
            padding: 12px 16px !important;
            border: 1px solid #d1d5db !important;
            border-radius: 12px !important;
            font-size: 18px !important;
            transition: all 0.3s ease !important;
            margin-bottom: 24px !important;
        }
        
        .wpcf7-form input:focus,
        .wpcf7-form select:focus,
        .wpcf7-form textarea:focus {
            outline: none !important;
            border-color: #3b82f6 !important;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5) !important;
        }
        
        .wpcf7-form input[type="submit"] {
            width: 100% !important;
            background: linear-gradient(to right, #2563eb, #7c3aed) !important;
            color: white !important;
            padding: 16px 32px !important;
            border-radius: 12px !important;
            font-size: 20px !important;
            font-weight: bold !important;
            border: none !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }
        
        .wpcf7-form input[type="submit"]:hover {
            background: linear-gradient(to right, #1d4ed8, #6d28d9) !important;
            transform: scale(1.05) !important;
        }
        
        .wpcf7-form label {
            display: block !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            color: #374151 !important;
            margin-bottom: 8px !important;
        }
        
        .wpcf7-response-output {
            border-radius: 12px !important;
            padding: 16px !important;
            margin-top: 16px !important;
        }
        
        .wpcf7-validation-errors {
            background-color: #fef2f2 !important;
            border-color: #fca5a5 !important;
            color: #dc2626 !important;
        }
        
        .wpcf7-mail-sent-ok {
            background-color: #f0fdf4 !important;
            border-color: #86efac !important;
            color: #16a34a !important;
        }
    </style>';
}
add_action('wp_head', 'champions_mindset_contact_form_styles');

// Security enhancements
function champions_mindset_security() {
    // Remove WordPress version from head
    remove_action('wp_head', 'wp_generator');
    
    // Disable XML-RPC
    add_filter('xmlrpc_enabled', '__return_false');
    
    // Remove unnecessary meta tags
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
}
add_action('init', 'champions_mindset_security');

// Performance optimizations
function champions_mindset_performance() {
    // Remove emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    
    // Remove block library CSS if not using Gutenberg
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'champions_mindset_performance', 100);
?>