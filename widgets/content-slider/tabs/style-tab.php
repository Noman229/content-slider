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
            'min' => 1,
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
            'default' => 'flex-start',
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
                'size' => 22,
                'unit' => 'px',
            ],
            'tablet_default' => [
                'size' => 15,
                'unit' => 'px',
            ],
            'mobile_default' => [
                'size' => 7,
                'unit' => 'px',
            ],
        ]
    );

    // Card Background Color
    $this->add_control(
        'card_background_color',
        [
            'label'     => esc_html__( 'Background Color', 'advance-widgets-for-elementor' ),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .content-slider-item' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    // Card Border
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name'      => 'card_border',
            'label'     => esc_html__( 'Border', 'advance-widgets-for-elementor' ),
            'selector'  => '{{WRAPPER}} .content-slider-item',
        ]
    );
    // Card Border Radius
    $this->add_responsive_control(
        'card_border_radius',
        [
            'label'      => esc_html__( 'Border Radius', 'advance-widgets-for-elementor' ),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors'  => [
                '{{WRAPPER}} .content-slider-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    // Card Box Shadow
    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name'      => 'card_box_shadow',
            'label'     => esc_html__( 'Box Shadow', 'advance-widgets-for-elementor' ),
            'selector'  => '{{WRAPPER}} .content-slider-item',
        ]
    );

    // Card Padding
    $this->add_responsive_control(
        'card_padding',
        [
            'label'      => esc_html__( 'Padding', 'advance-widgets-for-elementor' ),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors'  => [
                '{{WRAPPER}} .content-slider-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    // Card Margin
    $this->add_responsive_control(
        'card_margin',
        [
            'label'      => esc_html__( 'Margin', 'advance-widgets-for-elementor' ),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors'  => [
                '{{WRAPPER}} .content-slider-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    
    $this->end_controls_section();
    ?>