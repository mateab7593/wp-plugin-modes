<?php
/**
 * M.Commerce Theme Setup - Based on Figma Design
 * Creates header, footer, and sample pages matching the Figma design
 */

// ============================================
// HEADER TEMPLATE CONTENT (Figma Design)
// ============================================
// Design: White background, Logo left, Nav center-right, CTA button right
// Colors: Orange #F26522, Dark text #1a1a2e

$header_content = [
    [
        'id' => 'header-section',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'background_background' => 'classic',
            'background_color' => '#FFFFFF',
            'padding' => [
                'unit' => 'px',
                'top' => '15',
                'right' => '0',
                'bottom' => '15',
                'left' => '0',
                'isLinked' => false
            ],
            'box_shadow_box_shadow_type' => 'yes',
            'box_shadow_box_shadow' => [
                'horizontal' => 0,
                'vertical' => 2,
                'blur' => 10,
                'spread' => 0,
                'color' => 'rgba(0,0,0,0.05)'
            ],
        ],
        'elements' => [
            // Logo Column
            [
                'id' => 'header-logo-col',
                'elType' => 'column',
                'settings' => [
                    '_column_size' => 20,
                    'align' => 'left',
                ],
                'elements' => [
                    [
                        'id' => 'logo-widget',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="margin:0;"><span style="color: #F26522; font-size: 28px; font-weight: 700;">M.</span><span style="color: #1a1a2e; font-size: 22px; font-weight: 600;">Commerce</span></p>',
                        ],
                    ],
                ],
            ],
            // Navigation Column
            [
                'id' => 'header-nav-col',
                'elType' => 'column',
                'settings' => [
                    '_column_size' => 50,
                    'align' => 'center',
                ],
                'elements' => [
                    [
                        'id' => 'nav-widget',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="margin:0; text-align: center;"><a href="/" style="color: #1a1a2e; text-decoration: none; margin: 0 20px; font-size: 15px; font-weight: 500;">Zuhause</a><a href="/merkmale" style="color: #1a1a2e; text-decoration: none; margin: 0 20px; font-size: 15px; font-weight: 500;">Merkmale</a><a href="/preisgestaltung" style="color: #1a1a2e; text-decoration: none; margin: 0 20px; font-size: 15px; font-weight: 500;">Preisgestaltung</a><a href="/blog" style="color: #1a1a2e; text-decoration: none; margin: 0 20px; font-size: 15px; font-weight: 500;">Blog</a></p>',
                        ],
                    ],
                ],
            ],
            // CTA Column
            [
                'id' => 'header-cta-col',
                'elType' => 'column',
                'settings' => [
                    '_column_size' => 30,
                    'align' => 'right',
                ],
                'elements' => [
                    [
                        'id' => 'cta-widget',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="margin:0; text-align: right;"><a href="/login" style="color: #1a1a2e; text-decoration: none; margin-right: 25px; font-size: 15px; font-weight: 500;">Login</a><a href="/kontakt" style="color: #1a1a2e; text-decoration: none; margin-right: 25px; font-size: 15px; font-weight: 500;">Kontakt</a><a href="/start" style="background: #F26522; color: #fff; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-size: 14px; font-weight: 600;">Hier anfangen</a></p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

// ============================================
// FOOTER TEMPLATE CONTENT (Matching Style)
// ============================================

$footer_content = [
    // Main Footer Section
    [
        'id' => 'footer-main',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'background_background' => 'classic',
            'background_color' => '#1a1a2e',
            'padding' => [
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '40',
                'left' => '0',
                'isLinked' => false
            ],
        ],
        'elements' => [
            // Logo & Description
            [
                'id' => 'footer-col-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 30],
                'elements' => [
                    [
                        'id' => 'footer-logo',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="margin:0 0 15px 0;"><span style="color: #F26522; font-size: 28px; font-weight: 700;">M.</span><span style="color: #ffffff; font-size: 22px; font-weight: 600;">Commerce</span></p><p style="color: #9ca3af; font-size: 14px; line-height: 1.7;">Ihre E-Commerce-Lösung für modernes Online-Business. Wir helfen Ihnen, Ihren Online-Shop erfolgreich zu gestalten.</p>',
                        ],
                    ],
                ],
            ],
            // Quick Links
            [
                'id' => 'footer-col-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 20],
                'elements' => [
                    [
                        'id' => 'footer-links-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Quick Links',
                            'header_size' => 'h4',
                            'title_color' => '#ffffff',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 16, 'unit' => 'px'],
                            'typography_font_weight' => '600',
                        ],
                    ],
                    [
                        'id' => 'footer-links',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="margin: 8px 0;"><a href="/" style="color: #9ca3af; text-decoration: none; font-size: 14px;">Zuhause</a></p><p style="margin: 8px 0;"><a href="/merkmale" style="color: #9ca3af; text-decoration: none; font-size: 14px;">Merkmale</a></p><p style="margin: 8px 0;"><a href="/preisgestaltung" style="color: #9ca3af; text-decoration: none; font-size: 14px;">Preisgestaltung</a></p><p style="margin: 8px 0;"><a href="/blog" style="color: #9ca3af; text-decoration: none; font-size: 14px;">Blog</a></p>',
                        ],
                    ],
                ],
            ],
            // Support
            [
                'id' => 'footer-col-3',
                'elType' => 'column',
                'settings' => ['_column_size' => 20],
                'elements' => [
                    [
                        'id' => 'footer-support-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Support',
                            'header_size' => 'h4',
                            'title_color' => '#ffffff',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 16, 'unit' => 'px'],
                            'typography_font_weight' => '600',
                        ],
                    ],
                    [
                        'id' => 'footer-support-links',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="margin: 8px 0;"><a href="/hilfe" style="color: #9ca3af; text-decoration: none; font-size: 14px;">Hilfe Center</a></p><p style="margin: 8px 0;"><a href="/kontakt" style="color: #9ca3af; text-decoration: none; font-size: 14px;">Kontakt</a></p><p style="margin: 8px 0;"><a href="/faq" style="color: #9ca3af; text-decoration: none; font-size: 14px;">FAQ</a></p><p style="margin: 8px 0;"><a href="/dokumentation" style="color: #9ca3af; text-decoration: none; font-size: 14px;">Dokumentation</a></p>',
                        ],
                    ],
                ],
            ],
            // Contact
            [
                'id' => 'footer-col-4',
                'elType' => 'column',
                'settings' => ['_column_size' => 30],
                'elements' => [
                    [
                        'id' => 'footer-contact-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Kontakt',
                            'header_size' => 'h4',
                            'title_color' => '#ffffff',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 16, 'unit' => 'px'],
                            'typography_font_weight' => '600',
                        ],
                    ],
                    [
                        'id' => 'footer-contact-info',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="color: #9ca3af; font-size: 14px; margin: 8px 0;">Email: info@mcommerce.de</p><p style="color: #9ca3af; font-size: 14px; margin: 8px 0;">Tel: +49 123 456 789</p><p style="color: #9ca3af; font-size: 14px; margin: 8px 0;">Musterstraße 123<br>10115 Berlin, Deutschland</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    // Copyright Section
    [
        'id' => 'footer-copyright',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'background_background' => 'classic',
            'background_color' => '#13131f',
            'padding' => [
                'unit' => 'px',
                'top' => '20',
                'right' => '0',
                'bottom' => '20',
                'left' => '0',
                'isLinked' => false
            ],
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
                            'editor' => '<p style="color: #6b7280; text-align: center; font-size: 13px; margin: 0;">&copy; 2024 M.Commerce. Alle Rechte vorbehalten. | <a href="/datenschutz" style="color: #6b7280;">Datenschutz</a> | <a href="/impressum" style="color: #6b7280;">Impressum</a></p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

// ============================================
// HOME PAGE CONTENT
// ============================================

$home_content = array_merge($header_content, [
    // Hero Section with gradient
    [
        'id' => 'hero-section',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'min_height' => ['size' => 550, 'unit' => 'px'],
            'background_background' => 'gradient',
            'background_color' => '#FFF5F0',
            'background_color_b' => '#FFFFFF',
            'background_gradient_angle' => ['size' => 180, 'unit' => 'deg'],
            'content_position' => 'middle',
            'padding' => [
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false
            ],
        ],
        'elements' => [
            [
                'id' => 'hero-col-left',
                'elType' => 'column',
                'settings' => ['_column_size' => 55],
                'elements' => [
                    [
                        'id' => 'hero-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Starten Sie Ihr E-Commerce Business heute',
                            'header_size' => 'h1',
                            'title_color' => '#1a1a2e',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 48, 'unit' => 'px'],
                            'typography_font_weight' => '700',
                            'typography_line_height' => ['size' => 1.2, 'unit' => 'em'],
                        ],
                    ],
                    [
                        'id' => 'hero-text',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="color: #4b5563; font-size: 18px; line-height: 1.7; margin: 25px 0;">Die All-in-One Plattform für Ihren Online-Shop. Einfach zu bedienen, leistungsstark und skalierbar für Ihr wachsendes Business.</p>',
                        ],
                    ],
                    [
                        'id' => 'hero-buttons',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p><a href="/start" style="display: inline-block; background: #F26522; color: #fff; text-decoration: none; padding: 15px 32px; border-radius: 6px; font-size: 16px; font-weight: 600; margin-right: 15px;">Kostenlos starten</a><a href="/demo" style="display: inline-block; background: transparent; color: #1a1a2e; text-decoration: none; padding: 15px 32px; border-radius: 6px; font-size: 16px; font-weight: 600; border: 2px solid #e5e7eb;">Demo ansehen</a></p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'hero-col-right',
                'elType' => 'column',
                'settings' => ['_column_size' => 45],
                'elements' => [
                    [
                        'id' => 'hero-image-placeholder',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<div style="background: linear-gradient(135deg, #F26522 0%, #ff8a50 100%); border-radius: 16px; height: 350px; display: flex; align-items: center; justify-content: center; box-shadow: 0 25px 50px rgba(242, 101, 34, 0.2);"><p style="color: #fff; font-size: 18px; text-align: center;">Dashboard Preview<br><span style="font-size: 14px; opacity: 0.8;">Add your image here</span></p></div>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    // Features Section
    [
        'id' => 'features-section',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'background_background' => 'classic',
            'background_color' => '#FFFFFF',
            'padding' => [
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false
            ],
        ],
        'elements' => [
            [
                'id' => 'features-header-col',
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'features-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Warum M.Commerce?',
                            'align' => 'center',
                            'header_size' => 'h2',
                            'title_color' => '#1a1a2e',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 36, 'unit' => 'px'],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'features-subheading',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: #6b7280; font-size: 18px; max-width: 600px; margin: 15px auto 50px;">Entdecken Sie die Funktionen, die Ihren Online-Shop zum Erfolg führen</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'features-cards',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'background_background' => 'classic',
            'background_color' => '#FFFFFF',
            'padding' => [
                'unit' => 'px',
                'top' => '0',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false
            ],
        ],
        'elements' => [
            [
                'id' => 'feature-col-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'feature-card-1',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;"><span style="color: #F26522; font-size: 24px;">⚡</span></div><h3 style="color: #1a1a2e; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Schnell & Einfach</h3><p style="color: #6b7280; font-size: 15px; line-height: 1.6;">Richten Sie Ihren Shop in wenigen Minuten ein. Keine technischen Kenntnisse erforderlich.</p></div>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'feature-col-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'feature-card-2',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;"><span style="color: #F26522; font-size: 24px;">🔒</span></div><h3 style="color: #1a1a2e; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Sicher & Zuverlässig</h3><p style="color: #6b7280; font-size: 15px; line-height: 1.6;">SSL-Verschlüsselung und sichere Zahlungsabwicklung für Ihre Kunden.</p></div>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'feature-col-3',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'feature-card-3',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;"><span style="color: #F26522; font-size: 24px;">📈</span></div><h3 style="color: #1a1a2e; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Wachstum Analytik</h3><p style="color: #6b7280; font-size: 15px; line-height: 1.6;">Detaillierte Einblicke in Ihre Verkäufe und Kundenverhalten.</p></div>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    // CTA Section
    [
        'id' => 'cta-section',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'background_background' => 'classic',
            'background_color' => '#F26522',
            'padding' => [
                'unit' => 'px',
                'top' => '70',
                'right' => '0',
                'bottom' => '70',
                'left' => '0',
                'isLinked' => false
            ],
        ],
        'elements' => [
            [
                'id' => 'cta-col',
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'cta-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Bereit durchzustarten?',
                            'align' => 'center',
                            'header_size' => 'h2',
                            'title_color' => '#ffffff',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 36, 'unit' => 'px'],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'cta-text',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: rgba(255,255,255,0.9); font-size: 18px; margin: 15px 0 30px;">Starten Sie noch heute kostenlos und erleben Sie den Unterschied.</p><p style="text-align: center;"><a href="/start" style="display: inline-block; background: #ffffff; color: #F26522; text-decoration: none; padding: 15px 40px; border-radius: 6px; font-size: 16px; font-weight: 600;">Jetzt kostenlos starten</a></p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
], $footer_content);

// ============================================
// ABOUT PAGE CONTENT
// ============================================

$about_content = array_merge($header_content, [
    // About Hero
    [
        'id' => 'about-hero',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'min_height' => ['size' => 350, 'unit' => 'px'],
            'background_background' => 'gradient',
            'background_color' => '#FFF5F0',
            'background_color_b' => '#FFFFFF',
            'content_position' => 'middle',
            'padding' => [
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false
            ],
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
                            'title' => 'Über Uns',
                            'align' => 'center',
                            'header_size' => 'h1',
                            'title_color' => '#1a1a2e',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 48, 'unit' => 'px'],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'about-subtitle',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: #6b7280; font-size: 20px; max-width: 600px; margin: 20px auto 0;">Lernen Sie das Team hinter M.Commerce kennen</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    // About Content
    [
        'id' => 'about-content',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'padding' => [
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false
            ],
        ],
        'elements' => [
            [
                'id' => 'about-content-col-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 50],
                'elements' => [
                    [
                        'id' => 'about-mission-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Unsere Mission',
                            'header_size' => 'h2',
                            'title_color' => '#1a1a2e',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 32, 'unit' => 'px'],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'about-mission-text',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="color: #4b5563; font-size: 16px; line-height: 1.8; margin-top: 20px;">Bei M.Commerce glauben wir daran, dass jeder die Möglichkeit haben sollte, ein erfolgreiches Online-Business zu führen. Unsere Plattform wurde entwickelt, um den E-Commerce für alle zugänglich zu machen.</p><p style="color: #4b5563; font-size: 16px; line-height: 1.8; margin-top: 15px;">Wir kombinieren modernste Technologie mit benutzerfreundlichem Design, um Ihnen die beste E-Commerce-Lösung zu bieten.</p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'about-content-col-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 50],
                'elements' => [
                    [
                        'id' => 'about-values-heading',
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Unsere Werte',
                            'header_size' => 'h2',
                            'title_color' => '#1a1a2e',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 32, 'unit' => 'px'],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'about-values-text',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<div style="margin-top: 20px;"><p style="color: #4b5563; font-size: 16px; line-height: 1.8; margin-bottom: 15px;"><strong style="color: #F26522;">Innovation:</strong> Wir entwickeln ständig neue Funktionen</p><p style="color: #4b5563; font-size: 16px; line-height: 1.8; margin-bottom: 15px;"><strong style="color: #F26522;">Zuverlässigkeit:</strong> 99.9% Uptime-Garantie</p><p style="color: #4b5563; font-size: 16px; line-height: 1.8; margin-bottom: 15px;"><strong style="color: #F26522;">Support:</strong> 24/7 Kundenbetreuung</p><p style="color: #4b5563; font-size: 16px; line-height: 1.8;"><strong style="color: #F26522;">Transparenz:</strong> Keine versteckten Kosten</p></div>',
                        ],
                    ],
                ],
            ],
        ],
    ],
], $footer_content);

// ============================================
// CONTACT PAGE CONTENT
// ============================================

$contact_content = array_merge($header_content, [
    // Contact Hero
    [
        'id' => 'contact-hero',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'min_height' => ['size' => 350, 'unit' => 'px'],
            'background_background' => 'gradient',
            'background_color' => '#FFF5F0',
            'background_color_b' => '#FFFFFF',
            'content_position' => 'middle',
            'padding' => [
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false
            ],
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
                            'title' => 'Kontakt',
                            'align' => 'center',
                            'header_size' => 'h1',
                            'title_color' => '#1a1a2e',
                            'typography_typography' => 'custom',
                            'typography_font_size' => ['size' => 48, 'unit' => 'px'],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'contact-subtitle',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: #6b7280; font-size: 20px; max-width: 600px; margin: 20px auto 0;">Wir freuen uns von Ihnen zu hören</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    // Contact Info Cards
    [
        'id' => 'contact-cards',
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'content_width' => 'boxed',
            'padding' => [
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false
            ],
        ],
        'elements' => [
            [
                'id' => 'contact-card-1',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'contact-email-card',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;"><span style="color: #F26522; font-size: 24px;">✉️</span></div><h3 style="color: #1a1a2e; font-size: 18px; font-weight: 600; margin-bottom: 10px;">Email</h3><p style="color: #6b7280; font-size: 15px;">info@mcommerce.de</p></div>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'contact-card-2',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'contact-phone-card',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;"><span style="color: #F26522; font-size: 24px;">📞</span></div><h3 style="color: #1a1a2e; font-size: 18px; font-weight: 600; margin-bottom: 10px;">Telefon</h3><p style="color: #6b7280; font-size: 15px;">+49 123 456 789</p></div>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'contact-card-3',
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'contact-address-card',
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;"><span style="color: #F26522; font-size: 24px;">📍</span></div><h3 style="color: #1a1a2e; font-size: 18px; font-weight: 600; margin-bottom: 10px;">Adresse</h3><p style="color: #6b7280; font-size: 15px;">Musterstraße 123<br>10115 Berlin</p></div>',
                        ],
                    ],
                ],
            ],
        ],
    ],
], $footer_content);

// ============================================
// CREATE PAGES FUNCTION
// ============================================

function create_elementor_page($title, $slug, $content, $template = 'elementor_header_footer') {
    $existing = get_page_by_path($slug);
    if ($existing) {
        echo "Updating page '{$title}' (ID: {$existing->ID})...\n";
        $page_id = $existing->ID;
        wp_update_post([
            'ID' => $page_id,
            'post_title' => $title,
            'post_status' => 'publish',
        ]);
    } else {
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
        echo "Error: " . $page_id->get_error_message() . "\n";
        return false;
    }

    // Set Elementor data
    update_post_meta($page_id, '_elementor_data', wp_json_encode($content));
    update_post_meta($page_id, '_elementor_edit_mode', 'builder');
    update_post_meta($page_id, '_elementor_template_type', 'wp-page');
    update_post_meta($page_id, '_elementor_version', '3.35.0');
    update_post_meta($page_id, '_wp_page_template', 'elementor_canvas');

    return $page_id;
}

// ============================================
// RUN SETUP
// ============================================

echo "\n========================================\n";
echo "  M.Commerce Theme Setup (Figma Design)\n";
echo "========================================\n\n";

// Create pages
$home_id = create_elementor_page('Zuhause', 'home', $home_content);
$about_id = create_elementor_page('Über Uns', 'ueber-uns', $about_content);
$contact_id = create_elementor_page('Kontakt', 'kontakt', $contact_content);

// Set home as front page
if ($home_id) {
    update_option('show_on_front', 'page');
    update_option('page_on_front', $home_id);
    echo "\nSet 'Zuhause' as front page.\n";
}

echo "\n========================================\n";
echo "  Setup Complete!\n";
echo "========================================\n";
echo "\nPages created:\n";
echo "  - Zuhause (Home): http://localhost:8080/\n";
echo "  - Über Uns: http://localhost:8080/ueber-uns/\n";
echo "  - Kontakt: http://localhost:8080/kontakt/\n";
echo "\nDesign based on Figma: M.Commerce Header\n";
echo "- Orange accent color: #F26522\n";
echo "- Dark text: #1a1a2e\n";
echo "- Clean, modern layout\n";
echo "\nYou can edit these pages with Elementor!\n";
