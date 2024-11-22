<?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

    $this->start_controls_section(
        'section_content',
        [
            'label' => esc_html__( 'Items', 'advance-widgets-for-elementor' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
    
    $repeater = new \Elementor\Repeater();
    
    // Slider Image Field with Dynamic Content
    $repeater->add_control(
        'slider_image',
        [
            'label' => esc_html__( 'Image', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'dynamic' => [
                'active' => true,
                'link' => true,
            ],
        ]
    );
    
    // Title Field with Dynamic Content
    $repeater->add_control(
        'title',
        [
            'label' => esc_html__( 'Title', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'placeholder' => esc_html__( 'Enter title', 'advance-widgets-for-elementor' ),
            'default' => esc_html__( 'Default Title', 'advance-widgets-for-elementor' ),
            'dynamic' => [
                'active' => true, // Enable dynamic content
            ],
        ]
    );
    
    // Sub Title Field with Dynamic Content
    $repeater->add_control(
        'sub_title',
        [
            'label' => esc_html__( 'Sub Title', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'placeholder' => esc_html__( 'Enter sub title', 'advance-widgets-for-elementor' ),
            'default' => esc_html__( 'Default Sub Title', 'advance-widgets-for-elementor' ),
            'dynamic' => [
                'active' => true, // Enable dynamic content
            ],
        ]
    );
    
    // Description Field with Dynamic Content
    $repeater->add_control(
        'description',
        [
            'label' => esc_html__( 'Description', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'placeholder' => esc_html__( 'Enter description', 'advance-widgets-for-elementor' ),
            'default' => esc_html__( 'Default description text.', 'advance-widgets-for-elementor' ),
            'dynamic' => [
                'active' => true, // Enable dynamic content
            ],
        ]
    );
    
    // Button Text Field with Dynamic Content
    $repeater->add_control(
        'button_text',
        [
            'label' => esc_html__( 'Button Text', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'placeholder' => esc_html__( 'Enter button text', 'advance-widgets-for-elementor' ),
            'default' => esc_html__( 'Learn More', 'advance-widgets-for-elementor' ),
            'dynamic' => [
                'active' => true, // Enable dynamic content
            ],
        ]
    );
    
    // Button Link Field with Dynamic Content (Supports Dynamic URL)
    $repeater->add_control(
        'button_link',
        [
            'label' => esc_html__( 'Button Link', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::URL,
            'placeholder' => esc_html__( 'https://your-link.com', 'advance-widgets-for-elementor' ),
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
            'dynamic' => [
                'active' => true, // Enable dynamic content
                'link' => true, // Allow dynamic link fetching
            ],
        ]
    );
    
    // Adding the repeater to the control
    $this->add_control(
        'slider_items',
        [
            'label' => esc_html__( 'Slider Items', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'slider_image' => ['url' => \Elementor\Utils::get_placeholder_image_src()],
                    'title' => esc_html__( 'Title #1', 'advance-widgets-for-elementor' ),
                    'sub_title' => esc_html__( 'Sub Title #1', 'advance-widgets-for-elementor' ),
                    'description' => esc_html__( 'Description for item #1', 'advance-widgets-for-elementor' ),
                    'button_text' => esc_html__( 'Learn More', 'advance-widgets-for-elementor' ),
                    'button_link' => ['url' => 'https://example.com'],
                ],
                [
                    'slider_image' => ['url' => \Elementor\Utils::get_placeholder_image_src()],
                    'title' => esc_html__( 'Title #2', 'advance-widgets-for-elementor' ),
                    'sub_title' => esc_html__( 'Sub Title #2', 'advance-widgets-for-elementor' ),
                    'description' => esc_html__( 'Description for item #2', 'advance-widgets-for-elementor' ),
                    'button_text' => esc_html__( 'Learn More', 'advance-widgets-for-elementor' ),
                    'button_link' => ['url' => 'https://example.com'],
                ],
            ],
            'title_field' => '{{{ title }}} - {{{ sub_title }}}',
        ]
    );
    
    
    $this->end_controls_section();