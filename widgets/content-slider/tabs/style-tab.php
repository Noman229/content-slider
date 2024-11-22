<?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

    $this->start_controls_section(
        'slider_flex_controls',
        [
            'label' => esc_html__( 'Layout', 'advance-widgets-for-elementor' ),
            'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $this->add_responsive_control(
        'items_per_row',
        [
            'label' => esc_html__( 'Items Per Row', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => 2,
            'max' => 6,
            'step' => 1,
            'default' => 3,
            'tablet_default' => 2,
            'mobile_default' => 1,
            'description' => esc_html__( 'Specify the number of items to display per row.', 'advance-widgets-for-elementor' ),
        ]
    );

    $this->add_responsive_control(
        'display',
        [
            'label' => __( 'Display', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'flex' => 'Flex',
                'inline-flex' => 'Inline Flex',
                'block' => 'Block',
                'inline-block' => 'Inline Block',
                'none' => 'None',
            ],
            'default' => 'flex',
        ]
    );

    $this->add_responsive_control(
        'flex_direction',
        [
            'label' => __( 'Flex Direction', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'row' => 'Row',
                'row-reverse' => 'Row Reverse',
                'column' => 'Column',
                'column-reverse' => 'Column Reverse',
            ],
            'default' => 'row',
        ]
    );
    
    
    $this->add_responsive_control(
        'flex_direction',
        [
            'label' => __( 'Flex Direction', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'row' => 'Row',
                'row-reverse' => 'Row Reverse',
                'column' => 'Column',
                'column-reverse' => 'Column Reverse',
            ],
            'default' => 'row',
            'tablet_default' => 'row',
            'mobile_default' => 'column',
        ]
    );
    
    $this->add_responsive_control(
        'justify_content',
        [
            'label' => __( 'Justify Content', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'flex-start' => 'Flex Start',
                'flex-end' => 'Flex End',
                'center' => 'Center',
                'space-between' => 'Space Between',
                'space-around' => 'Space Around',
                'space-evenly' => 'Space Evenly',
            ],
            'default' => 'space-between',
            'tablet_default' => 'center',
            'mobile_default' => 'flex-start',
        ]
    );
    
    $this->add_responsive_control(
        'align_items',
        [
            'label' => __( 'Align Items', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'flex-start' => 'Flex Start',
                'flex-end' => 'Flex End',
                'center' => 'Center',
                'baseline' => 'Baseline',
                'stretch' => 'Stretch',
            ],
            'default' => 'stretch',
            'tablet_default' => 'center',
            'mobile_default' => 'stretch',
        ]
    );

    $this->add_responsive_control(
        'flex_wrap',
        [
            'label' => __( 'Flex Wrap', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'nowrap' => 'No Wrap',
                'wrap' => 'Wrap',
                'wrap-reverse' => 'Wrap Reverse',
            ],
            'default' => 'nowrap',
            'tablet_default' => 'wrap',
            'mobile_default' => 'wrap',
            'description' => esc_html__( 'Control whether items wrap onto the next line when there is not enough space.', 'advance-widgets-for-elementor' ),
        ]
    );

    $this->add_responsive_control(
        'gap',
        [
            'label' => __( 'Gap', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'default' => [
                'size' => 10,
                'unit' => 'px',
            ],
            'tablet_default' => [
                'size' => 8,
                'unit' => 'px',
            ],
            'mobile_default' => [
                'size' => 5,
                'unit' => 'px',
            ],
        ]
    );
    
    $this->end_controls_section();
    ?>