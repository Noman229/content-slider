<?php
    class Content_Slider_Widget extends \Elementor\Widget_Base {
        public function get_name() {
            return 'content__slider';
        }
        public function get_title() {
            return esc_html__( 'Content Slider', 'advance-widgets-for-elementor' );
        }
        public function get_icon() {
            return 'eicon-post-slider';
        }
        public function get_categories() {
            return [ 'general' ];
        }
        public function get_keywords() {
            return [ 'slider', 'carousel', 'content' ];
        }

        protected function register_controls() {
            // Content Tab Start
            require_once __DIR__ . '/tabs/content-tab.php';

            // Image Styling Start
            require_once __DIR__ . '/tabs/style-tab.php';
        }

        // protected function render() {
        //     $settings = $this->get_settings_for_display();
        
        //     // Calculate the percentage width for items per row
        //     $items_per_row = !empty($settings['items_per_row']) ? $settings['items_per_row'] : 3;
        //     $item_width = 100 / $items_per_row;
        
        //     // Start slider wrapper
        //     echo '<div class="content-slider" style="display: ' . esc_attr($settings['display']) . '; flex-direction: ' . esc_attr($settings['flex_direction']) . '; flex-wrap: ' . esc_attr($settings['flex_wrap']) . '; justify-content: ' . esc_attr($settings['justify_content']) . '; align-items: ' . esc_attr($settings['align_items']) . '; gap: ' . esc_attr($settings['gap']['size']) . $settings['gap']['unit'] . ';">';
        
        //     // Check if repeater items are defined
        //     if (!empty($settings['slider_items'])) {
        //         foreach ($settings['slider_items'] as $item) {
        //             echo '<div class="content-slider-item" style="flex: 0 0 calc(' . esc_attr($item_width) . '% - ' . esc_attr($settings['gap']['size']) . $settings['gap']['unit'] . '); max-width: calc(' . esc_attr($item_width) . '% - ' . esc_attr($settings['gap']['size']) . $settings['gap']['unit'] . ');">';
        
        //             // Render image
        //             if (!empty($item['image']['url'])) {
        //                 echo '<div class="slider-image">';
        //                 echo '<img src="' . esc_url($item['image']['url']) . '" alt="' . esc_attr($item['title']) . '">';
        //                 echo '</div>';
        //             }
        
        //             // Render title
        //             if (!empty($item['title'])) {
        //                 echo '<h3 class="slider-title">' . esc_html($item['title']) . '</h3>';
        //             }
        
        //             // Render subtitle
        //             if (!empty($item['sub_title'])) {
        //                 echo '<h4 class="slider-subtitle">' . esc_html($item['sub_title']) . '</h4>';
        //             }
        
        //             // Render description
        //             if (!empty($item['description'])) {
        //                 echo '<p class="slider-description">' . esc_html($item['description']) . '</p>';
        //             }
        
        //             // Render button
        //             if (!empty($item['button_text']) && !empty($item['button_link']['url'])) {
        //                 echo '<a href="' . esc_url($item['button_link']['url']) . '" class="slider-button" target="' . ( $item['button_link']['is_external'] ? '_blank' : '_self' ) . '">';
        //                 echo esc_html($item['button_text']);
        //                 echo '</a>';
        //             }
        
        //             echo '</div>'; // Close content-slider-item
        //         }
        //     }
        
        //     echo '</div>'; // Close slider wrapper
        // }

        protected function render() {
            $settings = $this->get_settings_for_display();
        
            // Fetch responsive values
            $items_per_row = [
                'desktop' => !empty($settings['items_per_row']) ? $settings['items_per_row'] : 3,
                'tablet' => !empty($settings['items_per_row_tablet']) ? $settings['items_per_row_tablet'] : 2,
                'mobile' => !empty($settings['items_per_row_mobile']) ? $settings['items_per_row_mobile'] : 1,
            ];
        
            $gap = [
                'desktop' => !empty($settings['gap']['size']) ? $settings['gap']['size'] . $settings['gap']['unit'] : '10px',
                'tablet' => !empty($settings['gap_tablet']['size']) ? $settings['gap_tablet']['size'] . $settings['gap_tablet']['unit'] : '8px',
                'mobile' => !empty($settings['gap_mobile']['size']) ? $settings['gap_mobile']['size'] . $settings['gap_mobile']['unit'] : '5px',
            ];
        
            $flex_wrap = [
                'desktop' => isset($settings['flex_wrap']) ? $settings['flex_wrap'] : 'nowrap',
                'tablet' => isset($settings['flex_wrap_tablet']) ? $settings['flex_wrap_tablet'] : 'wrap',
                'mobile' => isset($settings['flex_wrap_mobile']) ? $settings['flex_wrap_mobile'] : 'wrap',
            ];
            
        
            // Start slider wrapper with responsive styles
            echo '<div class="content-slider" style="display: ' . esc_attr($settings['display']) . '; flex-direction: ' . esc_attr($settings['flex_direction']) . '; justify-content: ' . esc_attr($settings['justify_content']) . '; align-items: ' . esc_attr($settings['align_items']) . ';">';
        
            // Inline style for responsive items
            echo '<style>';
            echo '@media (min-width: 1025px) {';
            echo '.content-slider .content-slider-item { flex: 0 0 calc(' . (100 / esc_attr($items_per_row['desktop'])) . '% - ' . esc_attr($gap['desktop']) . '); max-width: calc(' . (100 / esc_attr($items_per_row['desktop'])) . '% - ' . esc_attr($gap['desktop']) . '); }';
            echo '.content-slider { gap: ' . esc_attr($gap['desktop']) . '; flex-wrap: ' . esc_attr($flex_wrap['desktop']) . '; }';
            echo '}';
            echo '@media (max-width: 1024px) and (min-width: 768px) {';
            echo '.content-slider .content-slider-item { flex: 0 0 calc(' . (100 / esc_attr($items_per_row['tablet'])) . '% - ' . esc_attr($gap['tablet']) . '); max-width: calc(' . (100 / esc_attr($items_per_row['tablet'])) . '% - ' . esc_attr($gap['tablet']) . '); }';
            echo '.content-slider { gap: ' . esc_attr($gap['tablet']) . '; flex-wrap: ' . esc_attr($flex_wrap['tablet']) . '; }';
            echo '}';
            echo '@media (max-width: 767px) {';
            echo '.content-slider .content-slider-item { flex: 0 0 calc(' . (100 / esc_attr($items_per_row['mobile'])) . '% - ' . esc_attr($gap['mobile']) . '); max-width: calc(' . (100 / esc_attr($items_per_row['mobile'])) . '% - ' . esc_attr($gap['mobile']) . '); }';
            echo '.content-slider { gap: ' . esc_attr($gap['mobile']) . '; flex-wrap: ' . esc_attr($flex_wrap['mobile']) . '; }';
            echo '}';
            echo '</style>';
        
            // Check if repeater items are defined
            if (!empty($settings['slider_items'])) {
                foreach ($settings['slider_items'] as $item) {
                    echo '<div class="content-slider-item">';
        
                    // Render image
                    // Render image
                    if (!empty($item['image']['url'])) {
                        $image_url = $item['image']['url'];
                    } else {
                        $image_url = \Elementor\Utils::get_placeholder_image_src(); // Fallback to default Elementor image
                    }
                    echo '<div class="slider-image">';
                    echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($item['title']) . '">';
                    echo '</div>';

        
                    // Render title
                    if (!empty($item['title'])) {
                        echo '<h3 class="slider-title">' . esc_html($item['title']) . '</h3>';
                    }
        
                    // Render subtitle
                    if (!empty($item['sub_title'])) {
                        echo '<h4 class="slider-subtitle">' . esc_html($item['sub_title']) . '</h4>';
                    }
        
                    // Render description
                    if (!empty($item['description'])) {
                        echo '<p class="slider-description">' . esc_html($item['description']) . '</p>';
                    }
        
                    // Render button
                    if (!empty($item['button_text']) && !empty($item['button_link']['url'])) {
                        echo '<a href="' . esc_url($item['button_link']['url']) . '" class="slider-button" target="' . ( $item['button_link']['is_external'] ? '_blank' : '_self' ) . '">';
                        echo esc_html($item['button_text']);
                        echo '</a>';
                    }
        
                    echo '</div>'; // Close content-slider-item
                }
            }
        
            echo '</div>'; // Close slider wrapper
        }
        
        
        
        
    }