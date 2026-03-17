<?php
/**
 * Elementor Sample Pages Setup
 * Run this via WP-CLI: wp eval-file setup-pages.php
 */

// Check if Elementor is active
if (!did_action('elementor/loaded')) {
    // Load Elementor manually for CLI
    if (file_exists(WP_PLUGIN_DIR . '/elementor/elementor.php')) {
        require_once WP_PLUGIN_DIR . '/elementor/elementor.php';
    }
}

// Header Template Content (Elementor JSON structure)
$header_content = [
    [
        'id' => 'header-section',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'background_background' => 'classic',
            'background_color' => '#1a1a2e',
            'padding' => ['top' => '15', 'bottom' => '15', 'unit' => 'px'],
        ],
        'elements' => [
            [
                'id' => 'header-column-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 30],
                'elements' => [
                    [
                        'id' => 'logo-widget',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'MyBrand',
                            'header_size' => 'h1',
                            'title_color' => '#ffffff',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 28, 'unit' => 'px'],
                            'typography_font_weight' => '700',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'header-column-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 70],
                'elements' => [
                    [
                        'id' => 'nav-widget',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: right;"><a href="/" style="color: #fff; text-decoration: none; margin: 0 15px;">Home</a> <a href="/about" style="color: #fff; text-decoration: none; margin: 0 15px;">About</a> <a href="/services" style="color: #fff; text-decoration: none; margin: 0 15px;">Services</a> <a href="/contact" style="color: #fff; text-decoration: none; margin: 0 15px;">Contact</a></p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

// Footer Template Content
$footer_content = [
    [
        'id' => 'footer-section',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'background_background' => 'classic',
            'background_color' => '#1a1a2e',
            'padding' => ['top' => '50', 'bottom' => '30', 'unit' => 'px'],
        ],
        'elements' => [
            [
                'id' => 'footer-col-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'footer-heading-1',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'MyBrand',
                            'header_size' => 'h3',
                            'title_color' => '#ffffff',
                        ],
                    ],
                    [
                        'id' => 'footer-text-1',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="color: #ccc;">Building amazing digital experiences since 2024. We create beautiful, functional websites.</p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'footer-col-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'footer-heading-2',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Quick Links',
                            'header_size' => 'h4',
                            'title_color' => '#ffffff',
                        ],
                    ],
                    [
                        'id' => 'footer-links',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p><a href="/" style="color: #ccc;">Home</a></p><p><a href="/about" style="color: #ccc;">About Us</a></p><p><a href="/services" style="color: #ccc;">Services</a></p><p><a href="/contact" style="color: #ccc;">Contact</a></p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'footer-col-3',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'footer-heading-3',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Contact Info',
                            'header_size' => 'h4',
                            'title_color' => '#ffffff',
                        ],
                    ],
                    [
                        'id' => 'footer-contact',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="color: #ccc;">Email: hello@mybrand.com</p><p style="color: #ccc;">Phone: +1 234 567 890</p><p style="color: #ccc;">Address: 123 Street, City</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'copyright-section',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'background_background' => 'classic',
            'background_color' => '#0f0f1a',
            'padding' => ['top' => '20', 'bottom' => '20', 'unit' => 'px'],
        ],
        'elements' => [
            [
                'id' => 'copyright-col',
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'copyright-text',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="color: #888; text-align: center;">&copy; 2024 MyBrand. All rights reserved.</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

// Home Page Content
$home_content = [
    // Hero Section
    [
        'id' => 'hero-section',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'min_height' => ['size' => 600, 'unit' => 'px'],
            'background_background' => 'gradient',
            'background_color' => '#667eea',
            'background_color_b' => '#764ba2',
            'content_position' => 'middle',
        ],
        'elements' => [
            [
                'id' => 'hero-col',
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'hero-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Welcome to MyBrand',
                            'align' => 'center',
                            'title_color' => '#ffffff',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 56, 'unit' => 'px'],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'hero-subheading',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: #fff; font-size: 20px;">We create stunning digital experiences that captivate your audience</p>',
                        ],
                    ],
                    [
                        'id' => 'hero-button',
                        'elType' => 'widget',
                        'widgetType' => 'button',
                        'settings' => [
                            'text' => 'Get Started',
                            'align' => 'center',
                            'background_color' => '#ffffff',
                            'button_text_color' => '#667eea',
                            'border_radius' => ['top' => '30', 'right' => '30', 'bottom' => '30', 'left' => '30', 'unit' => 'px'],
                        ],
                    ],
                ],
            ],
        ],
    ],
    // Services Section
    [
        'id' => 'services-section',
        'elType' => 'section',
        'settings' => [
            'padding' => ['top' => '80', 'bottom' => '80', 'unit' => 'px'],
        ],
        'elements' => [
            [
                'id' => 'services-col-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'service-icon-1',
                        'elType' => 'widget',
                        'widgetType' => 'icon',
                        'settings' => [
                            'selected_icon' => ['value' => 'fas fa-laptop-code', 'library' => 'fa-solid'],
                            'align' => 'center',
                            'primary_color' => '#667eea',
                        ],
                    ],
                    [
                        'id' => 'service-title-1',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Web Development',
                            'align' => 'center',
                            'header_size' => 'h3',
                        ],
                    ],
                    [
                        'id' => 'service-desc-1',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center;">Custom websites built with modern technologies and best practices.</p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'services-col-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'service-icon-2',
                        'elType' => 'widget',
                        'widgetType' => 'icon',
                        'settings' => [
                            'selected_icon' => ['value' => 'fas fa-paint-brush', 'library' => 'fa-solid'],
                            'align' => 'center',
                            'primary_color' => '#667eea',
                        ],
                    ],
                    [
                        'id' => 'service-title-2',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'UI/UX Design',
                            'align' => 'center',
                            'header_size' => 'h3',
                        ],
                    ],
                    [
                        'id' => 'service-desc-2',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center;">Beautiful and intuitive designs that enhance user experience.</p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'services-col-3',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'service-icon-3',
                        'elType' => 'widget',
                        'widgetType' => 'icon',
                        'settings' => [
                            'selected_icon' => ['value' => 'fas fa-rocket', 'library' => 'fa-solid'],
                            'align' => 'center',
                            'primary_color' => '#667eea',
                        ],
                    ],
                    [
                        'id' => 'service-title-3',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Digital Marketing',
                            'align' => 'center',
                            'header_size' => 'h3',
                        ],
                    ],
                    [
                        'id' => 'service-desc-3',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center;">Strategic marketing solutions to grow your online presence.</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

// About Page Content
$about_content = [
    [
        'id' => 'about-hero',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'min_height' => ['size' => 400, 'unit' => 'px'],
            'background_background' => 'gradient',
            'background_color' => '#11998e',
            'background_color_b' => '#38ef7d',
            'content_position' => 'middle',
        ],
        'elements' => [
            [
                'id' => 'about-hero-col',
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'about-title',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'About Us',
                            'align' => 'center',
                            'title_color' => '#ffffff',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 48, 'unit' => 'px'],
                        ],
                    ],
                    [
                        'id' => 'about-subtitle',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: #fff; font-size: 18px;">Learn more about our story and mission</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'about-content',
        'elType' => 'section',
        'settings' => [
            'padding' => ['top' => '80', 'bottom' => '80', 'unit' => 'px'],
        ],
        'elements' => [
            [
                'id' => 'about-col-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 50],
                'elements' => [
                    [
                        'id' => 'about-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Our Story',
                            'header_size' => 'h2',
                        ],
                    ],
                    [
                        'id' => 'about-text',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p>Founded in 2024, MyBrand has been at the forefront of digital innovation. We believe in creating meaningful connections between brands and their audiences through thoughtful design and cutting-edge technology.</p><p>Our team of passionate designers, developers, and strategists work together to deliver exceptional results for our clients worldwide.</p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'about-col-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 50],
                'elements' => [
                    [
                        'id' => 'about-heading-2',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Our Mission',
                            'header_size' => 'h2',
                        ],
                    ],
                    [
                        'id' => 'about-text-2',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p>We strive to empower businesses with digital solutions that drive growth and create lasting impact. Our commitment to excellence and innovation guides everything we do.</p><p>We measure our success by the success of our clients and the positive impact we create together.</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

// Contact Page Content
$contact_content = [
    [
        'id' => 'contact-hero',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'min_height' => ['size' => 400, 'unit' => 'px'],
            'background_background' => 'gradient',
            'background_color' => '#f093fb',
            'background_color_b' => '#f5576c',
            'content_position' => 'middle',
        ],
        'elements' => [
            [
                'id' => 'contact-hero-col',
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'contact-title',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Contact Us',
                            'align' => 'center',
                            'title_color' => '#ffffff',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 48, 'unit' => 'px'],
                        ],
                    ],
                    [
                        'id' => 'contact-subtitle',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: #fff; font-size: 18px;">Get in touch with us today</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'contact-info',
        'elType' => 'section',
        'settings' => [
            'padding' => ['top' => '80', 'bottom' => '80', 'unit' => 'px'],
        ],
        'elements' => [
            [
                'id' => 'contact-col-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'contact-icon-1',
                        'elType' => 'widget',
                        'widgetType' => 'icon',
                        'settings' => [
                            'selected_icon' => ['value' => 'fas fa-map-marker-alt', 'library' => 'fa-solid'],
                            'align' => 'center',
                            'primary_color' => '#f5576c',
                        ],
                    ],
                    [
                        'id' => 'contact-heading-1',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Address',
                            'align' => 'center',
                            'header_size' => 'h4',
                        ],
                    ],
                    [
                        'id' => 'contact-text-1',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center;">123 Business Street<br>City, State 12345<br>Country</p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'contact-col-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'contact-icon-2',
                        'elType' => 'widget',
                        'widgetType' => 'icon',
                        'settings' => [
                            'selected_icon' => ['value' => 'fas fa-envelope', 'library' => 'fa-solid'],
                            'align' => 'center',
                            'primary_color' => '#f5576c',
                        ],
                    ],
                    [
                        'id' => 'contact-heading-2',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Email',
                            'align' => 'center',
                            'header_size' => 'h4',
                        ],
                    ],
                    [
                        'id' => 'contact-text-2',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center;">hello@mybrand.com<br>support@mybrand.com</p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'contact-col-3',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'contact-icon-3',
                        'elType' => 'widget',
                        'widgetType' => 'icon',
                        'settings' => [
                            'selected_icon' => ['value' => 'fas fa-phone', 'library' => 'fa-solid'],
                            'align' => 'center',
                            'primary_color' => '#f5576c',
                        ],
                    ],
                    [
                        'id' => 'contact-heading-3',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Phone',
                            'align' => 'center',
                            'header_size' => 'h4',
                        ],
                    ],
                    [
                        'id' => 'contact-text-3',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center;">+1 234 567 890<br>+1 234 567 891</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

// Services Page Content
$services_content = [
    [
        'id' => 'services-hero',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'min_height' => ['size' => 400, 'unit' => 'px'],
            'background_background' => 'gradient',
            'background_color' => '#4facfe',
            'background_color_b' => '#00f2fe',
            'content_position' => 'middle',
        ],
        'elements' => [
            [
                'id' => 'services-hero-col',
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'services-title',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Our Services',
                            'align' => 'center',
                            'title_color' => '#ffffff',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 48, 'unit' => 'px'],
                        ],
                    ],
                    [
                        'id' => 'services-subtitle',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: #fff; font-size: 18px;">Comprehensive digital solutions for your business</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'services-list',
        'elType' => 'section',
        'settings' => [
            'padding' => ['top' => '80', 'bottom' => '80', 'unit' => 'px'],
        ],
        'elements' => [
            [
                'id' => 'service-item-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 50],
                'elements' => [
                    [
                        'id' => 'service-detail-1',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Web Development',
                            'header_size' => 'h3',
                            'title_color' => '#4facfe',
                        ],
                    ],
                    [
                        'id' => 'service-desc-detail-1',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p>We build responsive, fast, and secure websites using the latest technologies. From simple landing pages to complex web applications, we deliver solutions that work.</p><ul><li>Custom WordPress Development</li><li>E-commerce Solutions</li><li>Web Application Development</li><li>API Integration</li></ul>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'service-item-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 50],
                'elements' => [
                    [
                        'id' => 'service-detail-2',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'UI/UX Design',
                            'header_size' => 'h3',
                            'title_color' => '#4facfe',
                        ],
                    ],
                    [
                        'id' => 'service-desc-detail-2',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p>Our design team creates beautiful, intuitive interfaces that delight users and drive engagement. We focus on user-centered design principles.</p><ul><li>User Interface Design</li><li>User Experience Research</li><li>Wireframing & Prototyping</li><li>Brand Identity Design</li></ul>',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

/**
 * Create a page with Elementor content
 */
function create_elementor_page($title, $slug, $content, $template = 'elementor_header_footer') {
    // Check if page exists
    $existing = get_page_by_path($slug);
    if ($existing) {
        echo "Page '{$title}' already exists (ID: {$existing->ID}). Updating...\n";
        $page_id = $existing->ID;
        wp_update_post([
            'ID' => $page_id,
            'post_title' => $title,
            'post_status' => 'publish',
        ]);
    } else {
        // Create the page
        $page_id = wp_insert_post([
            'post_title' => $title,
            'post_name' => $slug,
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_content' => '',
        ]);
        echo "Created page '{$title}' (ID: {$page_id})\n";
    }

    if (is_wp_error($page_id)) {
        echo "Error creating page: " . $page_id->get_error_message() . "\n";
        return false;
    }

    // Set Elementor data
    update_post_meta($page_id, '_elementor_data', wp_json_encode($content));
    update_post_meta($page_id, '_elementor_edit_mode', 'builder');
    update_post_meta($page_id, '_elementor_template_type', 'wp-page');
    update_post_meta($page_id, '_elementor_version', '3.35.0');
    
    // Set page template
    update_post_meta($page_id, '_wp_page_template', $template);

    return $page_id;
}

// Create the pages
echo "\n=== Creating Elementor Pages ===\n\n";

$home_id = create_elementor_page('Home', 'home', $home_content);
$about_id = create_elementor_page('About', 'about', $about_content);
$services_id = create_elementor_page('Services', 'services', $services_content);
$contact_id = create_elementor_page('Contact', 'contact', $contact_content);

// Set Home as front page
if ($home_id) {
    update_option('show_on_front', 'page');
    update_option('page_on_front', $home_id);
    echo "\nSet 'Home' as the front page.\n";
}

echo "\n=== Setup Complete ===\n";
echo "Pages created:\n";
echo "- Home: /\n";
echo "- About: /about\n";
echo "- Services: /services\n";
echo "- Contact: /contact\n";
echo "\nYou can now edit these pages with Elementor!\n";
