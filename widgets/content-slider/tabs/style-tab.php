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


    /******************************* Image Styling *******************************/

    $this->start_controls_section(
        'image_style_section',
        [
            'label' => esc_html__( 'Image', 'advance-widgets-for-elementor' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    // Alignment
    $this->add_responsive_control(
        'image_alignment',
        [
            'label' => esc_html__( 'Alignment', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'advance-widgets-for-elementor' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'advance-widgets-for-elementor' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'advance-widgets-for-elementor' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-image' => 'text-align: {{VALUE}};',
            ],
            'default' => 'center',
        ]
    );

    // Width
    $this->add_responsive_control(
        'image_width',
        [
            'label' => esc_html__( 'Width', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => [ '%', 'px', 'vw' ],
            'range' => [
                'px' => [
                    'min' => 10,
                    'max' => 1000,
                ],
                '%' => [
                    'min' => 10,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-image img' => 'width: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    // Max Width
    $this->add_responsive_control(
        'image_max_width',
        [
            'label' => esc_html__( 'Max Width', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => [ '%', 'px', 'vw' ],
            'range' => [
                'px' => [
                    'min' => 10,
                    'max' => 1000,
                ],
                '%' => [
                    'min' => 10,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-image img' => 'max-width: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    // Height
    $this->add_responsive_control(
        'image_height',
        [
            'label' => esc_html__( 'Height', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => [ 'px', 'vh' ],
            'range' => [
                'px' => [
                    'min' => 10,
                    'max' => 1000,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-image img' => 'height: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    // Object Fit (Conditionally Displayed)
    $this->add_control(
        'image_object_fit',
        [
            'label' => esc_html__( 'Object Fit', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'fill' => esc_html__( 'Fill', 'advance-widgets-for-elementor' ),
                'cover' => esc_html__( 'Cover', 'advance-widgets-for-elementor' ),
                'contain' => esc_html__( 'Contain', 'advance-widgets-for-elementor' ),
                'none' => esc_html__( 'None', 'advance-widgets-for-elementor' ),
                'scale-down' => esc_html__( 'Scale Down', 'advance-widgets-for-elementor' ),
            ],
            'default' => 'cover',
            'selectors' => [
                '{{WRAPPER}} .slider-item img' => 'object-fit: {{VALUE}};',
            ],
            // Conditional Display
            'condition' => [
                'image_height[size]!' => '', // Show only if a value is set for the height.
            ],
        ]
    );

    // Border Type
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'image_border',
            'label' => esc_html__( 'Border', 'advance-widgets-for-elementor' ),
            'selector' => '{{WRAPPER}} .slider-image img',
        ]
    );

    // Border Radius
    $this->add_responsive_control(
        'image_border_radius',
        [
            'label' => esc_html__( 'Border Radius', 'advance-widgets-for-elementor' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%' ],
            'selectors' => [
                '{{WRAPPER}} .slider-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->end_controls_section();


    /******************************* Title Styling *******************************/

     $this->start_controls_section(
        'title_style',
        [
            'label' => esc_html__( 'Title', 'nk-addon' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    // Alignment
    $this->add_control(
        'title_alignment',
        [
            'label' => esc_html__( 'Alignment', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'nk-addon' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'nk-addon' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'nk-addon' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'left',
            'selectors' => [
                '{{WRAPPER}} .slider-title' => 'text-align: {{VALUE}};',
            ],
        ]
    );

    // Text Color
    $this->add_control(
        'title_color',
        [
            'label' => esc_html__( 'Text Color', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#333333',
            'selectors' => [
                '{{WRAPPER}} .slider-title' => 'color: {{VALUE}};',
            ],
        ]
    );

    // Typography
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'title_typography',
            'label' => esc_html__( 'Typography', 'nk-addon' ),
            'selector' => '{{WRAPPER}} .slider-title',
        ]
    );

    // Margin
    $this->add_control(
        'title_margin',
        [
            'label' => esc_html__( 'Margin', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'default' => [
                'top' => '0',
                'right' => '0',
                'bottom' => '0',
                'left' => '0',
                'unit' => 'px',
                'isLinked' => false,
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    // Padding
    $this->add_control(
        'title_padding',
        [
            'label' => esc_html__( 'Padding', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'default' => [
                'top' => '0',
                'right' => '0',
                'bottom' => '0',
                'left' => '0',
                'unit' => 'px',
                'isLinked' => false,
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->end_controls_section();


    /******************************* Sub Title Styling *******************************/
    // Sub Title Styling
    $this->start_controls_section(
        'sub_title_style',
        [
            'label' => esc_html__( 'Sub Title', 'nk-addon' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    // Alignment
    $this->add_control(
        'sub_title_alignment',
        [
            'label' => esc_html__( 'Alignment', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'nk-addon' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'nk-addon' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'nk-addon' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'left',
            'selectors' => [
                '{{WRAPPER}} .slider-sub-title' => 'text-align: {{VALUE}};',
            ],
        ]
    );

    // Text Color
    $this->add_control(
        'sub_title_color',
        [
            'label' => esc_html__( 'Text Color', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#666666',
            'selectors' => [
                '{{WRAPPER}} .slider-sub-title' => 'color: {{VALUE}};',
            ],
        ]
    );

    // Typography
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'sub_title_typography',
            'label' => esc_html__( 'Typography', 'nk-addon' ),
            'selector' => '{{WRAPPER}} .slider-sub-title',
        ]
    );

    // Margin
    $this->add_control(
        'sub_title_margin',
        [
            'label' => esc_html__( 'Margin', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'default' => [
                'top' => '0',
                'right' => '0',
                'bottom' => '0',
                'left' => '0',
                'unit' => 'px',
                'isLinked' => false,
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    // Padding
    $this->add_control(
        'sub_title_padding',
        [
            'label' => esc_html__( 'Padding', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'default' => [
                'top' => '0',
                'right' => '0',
                'bottom' => '0',
                'left' => '0',
                'unit' => 'px',
                'isLinked' => false,
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->end_controls_section();
    
    
    /******************************* Description Styling *******************************/

    // Description Styling
    $this->start_controls_section(
        'description_style',
        [
            'label' => esc_html__( 'Description', 'nk-addon' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    // Alignment
    $this->add_control(
        'description_alignment',
        [
            'label' => esc_html__( 'Alignment', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'nk-addon' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'nk-addon' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'nk-addon' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'left',
            'selectors' => [
                '{{WRAPPER}} .slider-description' => 'text-align: {{VALUE}};',
            ],
        ]
    );

    // Text Color
    $this->add_control(
        'description_color',
        [
            'label' => esc_html__( 'Text Color', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#999999',
            'selectors' => [
                '{{WRAPPER}} .slider-description' => 'color: {{VALUE}};',
            ],
        ]
    );

    // Typography
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'description_typography',
            'label' => esc_html__( 'Typography', 'nk-addon' ),
            'selector' => '{{WRAPPER}} .slider-description',
        ]
    );

    $this->end_controls_section();



    /******************************* Button Styling *******************************/
    // Button Styling
    $this->start_controls_section(
        'button_style',
        [
            'label' => esc_html__( 'Button', 'nk-addon' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    // Alignment
    $this->add_control(
        'button_alignment',
        [
            'label' => esc_html__( 'Alignment', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'nk-addon' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'nk-addon' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'nk-addon' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'center',
            'selectors' => [
                '{{WRAPPER}} .slider-button' => 'text-align: {{VALUE}};',
            ],
        ]
    );

    // Typography
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'button_typography',
            'label' => esc_html__( 'Typography', 'nk-addon' ),
            'selector' => '{{WRAPPER}} .slider-button',
        ]
    );

    // Normal State
    $this->start_controls_tabs('button_tabs');

    $this->start_controls_tab(
        'button_normal',
        [
            'label' => esc_html__( 'Normal', 'nk-addon' ),
        ]
    );

    $this->add_control(
        'button_text_color',
        [
            'label' => esc_html__( 'Text Color', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#ffffff',
            'selectors' => [
                '{{WRAPPER}} .slider-button' => 'color: {{VALUE}};',
            ],
        ]
    );

    $this->add_control(
        'button_background_color',
        [
            'label' => esc_html__( 'Background Color', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#0073e6',
            'selectors' => [
                '{{WRAPPER}} .slider-button' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $this->end_controls_tab();

    // Hover State
    $this->start_controls_tab(
        'button_hover',
        [
            'label' => esc_html__( 'Hover', 'nk-addon' ),
        ]
    );

    $this->add_control(
        'button_hover_text_color',
        [
            'label' => esc_html__( 'Text Color', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#ffffff',
            'selectors' => [
                '{{WRAPPER}} .slider-button:hover' => 'color: {{VALUE}};',
            ],
        ]
    );

    $this->add_control(
        'button_hover_background_color',
        [
            'label' => esc_html__( 'Background Color', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => '#5d5d5d',
            'selectors' => [
                '{{WRAPPER}} .slider-button:hover' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $this->end_controls_tab();


    // Border
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'button_border',
            'label' => esc_html__( 'Border', 'nk-addon' ),
            'selector' => '{{WRAPPER}} .slider-button',
        ]
    );

    // Border Radius
    $this->add_control(
        'button_border_radius',
        [
            'label' => esc_html__( 'Border Radius', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%' ],
            'default' => [
                'top' => '',
                'right' => '',
                'bottom' => '',
                'left' => '',
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    // Box Shadow
    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'button_box_shadow',
            'label' => esc_html__( 'Box Shadow', 'nk-addon' ),
            'selector' => '{{WRAPPER}} .slider-button',
        ]
    );

    // Button Padding
    $this->add_control(
        'button_padding',
        [
            'label' => esc_html__( 'Padding', 'nk-addon' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%' ],
            'default' => [
                'top' => '10',
                'right' => '20',
                'bottom' => '10',
                'left' => '20',
            ],
            'selectors' => [
                '{{WRAPPER}} .slider-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->end_controls_section();