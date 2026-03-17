<?php
/**
 * M.Commerce Simple Setup - Working Elementor Pages
 */

// Simple working Elementor structure
$header_html = '
<div style="background: #fff; padding: 15px 40px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
    <div style="display: flex; align-items: center;">
        <span style="color: #F26522; font-size: 28px; font-weight: 700;">M.</span>
        <span style="color: #1a1a2e; font-size: 22px; font-weight: 600;">Commerce</span>
    </div>
    <nav style="display: flex; gap: 30px;">
        <a href="/" style="color: #1a1a2e; text-decoration: none; font-weight: 500;">Zuhause</a>
        <a href="/merkmale" style="color: #1a1a2e; text-decoration: none; font-weight: 500;">Merkmale</a>
        <a href="/preisgestaltung" style="color: #1a1a2e; text-decoration: none; font-weight: 500;">Preisgestaltung</a>
        <a href="/blog" style="color: #1a1a2e; text-decoration: none; font-weight: 500;">Blog</a>
    </nav>
    <div style="display: flex; align-items: center; gap: 20px;">
        <a href="/login" style="color: #1a1a2e; text-decoration: none; font-weight: 500;">Login</a>
        <a href="/kontakt" style="color: #1a1a2e; text-decoration: none; font-weight: 500;">Kontakt</a>
        <a href="/start" style="background: #F26522; color: #fff; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-weight: 600;">Hier anfangen</a>
    </div>
</div>
';

$footer_html = '
<div style="background: #1a1a2e; padding: 60px 40px 30px;">
    <div style="display: flex; justify-content: space-between; max-width: 1200px; margin: 0 auto; flex-wrap: wrap; gap: 40px;">
        <div style="flex: 1; min-width: 250px;">
            <p style="margin: 0 0 15px;"><span style="color: #F26522; font-size: 28px; font-weight: 700;">M.</span><span style="color: #fff; font-size: 22px; font-weight: 600;">Commerce</span></p>
            <p style="color: #9ca3af; font-size: 14px; line-height: 1.7;">Ihre E-Commerce-Lösung für modernes Online-Business.</p>
        </div>
        <div style="flex: 1; min-width: 150px;">
            <h4 style="color: #fff; font-size: 16px; margin: 0 0 15px;">Quick Links</h4>
            <p style="margin: 8px 0;"><a href="/" style="color: #9ca3af; text-decoration: none;">Zuhause</a></p>
            <p style="margin: 8px 0;"><a href="/merkmale" style="color: #9ca3af; text-decoration: none;">Merkmale</a></p>
            <p style="margin: 8px 0;"><a href="/preisgestaltung" style="color: #9ca3af; text-decoration: none;">Preisgestaltung</a></p>
        </div>
        <div style="flex: 1; min-width: 150px;">
            <h4 style="color: #fff; font-size: 16px; margin: 0 0 15px;">Support</h4>
            <p style="margin: 8px 0;"><a href="/hilfe" style="color: #9ca3af; text-decoration: none;">Hilfe Center</a></p>
            <p style="margin: 8px 0;"><a href="/kontakt" style="color: #9ca3af; text-decoration: none;">Kontakt</a></p>
            <p style="margin: 8px 0;"><a href="/faq" style="color: #9ca3af; text-decoration: none;">FAQ</a></p>
        </div>
        <div style="flex: 1; min-width: 200px;">
            <h4 style="color: #fff; font-size: 16px; margin: 0 0 15px;">Kontakt</h4>
            <p style="color: #9ca3af; font-size: 14px; margin: 8px 0;">info@mcommerce.de</p>
            <p style="color: #9ca3af; font-size: 14px; margin: 8px 0;">+49 123 456 789</p>
        </div>
    </div>
</div>
<div style="background: #13131f; padding: 20px; text-align: center;">
    <p style="color: #6b7280; font-size: 13px; margin: 0;">© 2024 M.Commerce. Alle Rechte vorbehalten.</p>
</div>
';

// HOME PAGE - Complete working structure
$home_content = [
    [
        'id' => 'h1'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'gap' => 'no',
            'padding' => ['unit' => 'px', 'top' => '0', 'right' => '0', 'bottom' => '0', 'left' => '0', 'isLinked' => true],
        ],
        'elements' => [
            [
                'id' => 'h1c'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'h1w'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => ['html' => $header_html],
                    ],
                ],
            ],
        ],
    ],
    // Hero Section
    [
        'id' => 'hero'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'min_height' => ['unit' => 'px', 'size' => 500],
            'background_background' => 'gradient',
            'background_color' => '#FFF5F0',
            'background_color_b' => '#FFFFFF',
            'padding' => ['unit' => 'px', 'top' => '80', 'right' => '40', 'bottom' => '80', 'left' => '40', 'isLinked' => false],
        ],
        'elements' => [
            [
                'id' => 'heroc1'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 60],
                'elements' => [
                    [
                        'id' => 'herow1'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Starten Sie Ihr E-Commerce Business heute',
                            'header_size' => 'h1',
                            'title_color' => '#1a1a2e',
                            'typography_font_size' => ['unit' => 'px', 'size' => 48],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'herow2'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="color: #4b5563; font-size: 18px; line-height: 1.7; margin: 25px 0 30px;">Die All-in-One Plattform für Ihren Online-Shop. Einfach zu bedienen, leistungsstark und skalierbar.</p>',
                        ],
                    ],
                    [
                        'id' => 'herow3'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<a href="/start" style="display: inline-block; background: #F26522; color: #fff; text-decoration: none; padding: 15px 32px; border-radius: 6px; font-size: 16px; font-weight: 600; margin-right: 15px;">Kostenlos starten</a><a href="/demo" style="display: inline-block; background: transparent; color: #1a1a2e; text-decoration: none; padding: 15px 32px; border-radius: 6px; font-size: 16px; font-weight: 600; border: 2px solid #e5e7eb;">Demo ansehen</a>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'heroc2'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 40],
                'elements' => [
                    [
                        'id' => 'herow4'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<div style="background: linear-gradient(135deg, #F26522 0%, #ff8a50 100%); border-radius: 16px; height: 300px; display: flex; align-items: center; justify-content: center; box-shadow: 0 25px 50px rgba(242, 101, 34, 0.2);"><p style="color: #fff; font-size: 18px; text-align: center; margin: 0;">Dashboard Preview</p></div>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    // Features Section
    [
        'id' => 'feat'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'background_color' => '#FFFFFF',
            'padding' => ['unit' => 'px', 'top' => '80', 'right' => '40', 'bottom' => '80', 'left' => '40', 'isLinked' => false],
        ],
        'elements' => [
            [
                'id' => 'featc1'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'featw1'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Warum M.Commerce?',
                            'align' => 'center',
                            'header_size' => 'h2',
                            'title_color' => '#1a1a2e',
                            'typography_font_size' => ['unit' => 'px', 'size' => 36],
                            'typography_font_weight' => '700',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'cards'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'padding' => ['unit' => 'px', 'top' => '0', 'right' => '40', 'bottom' => '80', 'left' => '40', 'isLinked' => false],
        ],
        'elements' => [
            [
                'id' => 'cardc1'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'cardw1'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">⚡</div><h3 style="color: #1a1a2e; font-size: 20px; font-weight: 600; margin: 0 0 12px;">Schnell & Einfach</h3><p style="color: #6b7280; font-size: 15px; line-height: 1.6; margin: 0;">Shop in Minuten einrichten. Keine technischen Kenntnisse nötig.</p></div>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'cardc2'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'cardw2'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">🔒</div><h3 style="color: #1a1a2e; font-size: 20px; font-weight: 600; margin: 0 0 12px;">Sicher & Zuverlässig</h3><p style="color: #6b7280; font-size: 15px; line-height: 1.6; margin: 0;">SSL-Verschlüsselung und sichere Zahlungsabwicklung.</p></div>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'cardc3'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'cardw3'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">📈</div><h3 style="color: #1a1a2e; font-size: 20px; font-weight: 600; margin: 0 0 12px;">Wachstum Analytik</h3><p style="color: #6b7280; font-size: 15px; line-height: 1.6; margin: 0;">Detaillierte Einblicke in Verkäufe und Kundenverhalten.</p></div>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    // CTA Section
    [
        'id' => 'cta'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'background_background' => 'classic',
            'background_color' => '#F26522',
            'padding' => ['unit' => 'px', 'top' => '70', 'right' => '40', 'bottom' => '70', 'left' => '40', 'isLinked' => false],
        ],
        'elements' => [
            [
                'id' => 'ctac'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'ctaw1'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Bereit durchzustarten?',
                            'align' => 'center',
                            'header_size' => 'h2',
                            'title_color' => '#FFFFFF',
                            'typography_font_size' => ['unit' => 'px', 'size' => 36],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'ctaw2'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<p style="text-align: center; color: rgba(255,255,255,0.9); font-size: 18px; margin: 15px 0 30px;">Starten Sie noch heute kostenlos.</p><p style="text-align: center;"><a href="/start" style="display: inline-block; background: #fff; color: #F26522; text-decoration: none; padding: 15px 40px; border-radius: 6px; font-size: 16px; font-weight: 600;">Jetzt kostenlos starten</a></p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    // Footer
    [
        'id' => 'f1'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'gap' => 'no',
            'padding' => ['unit' => 'px', 'top' => '0', 'right' => '0', 'bottom' => '0', 'left' => '0', 'isLinked' => true],
        ],
        'elements' => [
            [
                'id' => 'f1c'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'f1w'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => ['html' => $footer_html],
                    ],
                ],
            ],
        ],
    ],
];

// ABOUT PAGE
$about_content = [
    [
        'id' => 'ah1'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'gap' => 'no',
            'padding' => ['unit' => 'px', 'top' => '0', 'right' => '0', 'bottom' => '0', 'left' => '0', 'isLinked' => true],
        ],
        'elements' => [
            [
                'id' => 'ah1c'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'ah1w'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => ['html' => $header_html],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'abouthero'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'min_height' => ['unit' => 'px', 'size' => 300],
            'background_background' => 'gradient',
            'background_color' => '#FFF5F0',
            'background_color_b' => '#FFFFFF',
            'padding' => ['unit' => 'px', 'top' => '80', 'right' => '40', 'bottom' => '80', 'left' => '40', 'isLinked' => false],
        ],
        'elements' => [
            [
                'id' => 'aboutheroc'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'aboutherow'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Über Uns',
                            'align' => 'center',
                            'header_size' => 'h1',
                            'title_color' => '#1a1a2e',
                            'typography_font_size' => ['unit' => 'px', 'size' => 48],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'aboutherow2'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: #6b7280; font-size: 20px;">Lernen Sie das Team hinter M.Commerce kennen</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'aboutcontent'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'padding' => ['unit' => 'px', 'top' => '80', 'right' => '40', 'bottom' => '80', 'left' => '40', 'isLinked' => false],
        ],
        'elements' => [
            [
                'id' => 'aboutc1'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 50],
                'elements' => [
                    [
                        'id' => 'aboutw1'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Unsere Mission',
                            'header_size' => 'h2',
                            'title_color' => '#1a1a2e',
                        ],
                    ],
                    [
                        'id' => 'aboutw2'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="color: #4b5563; font-size: 16px; line-height: 1.8;">Bei M.Commerce glauben wir, dass jeder ein erfolgreiches Online-Business führen können sollte. Unsere Plattform macht E-Commerce für alle zugänglich.</p>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'aboutc2'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 50],
                'elements' => [
                    [
                        'id' => 'aboutw3'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Unsere Werte',
                            'header_size' => 'h2',
                            'title_color' => '#1a1a2e',
                        ],
                    ],
                    [
                        'id' => 'aboutw4'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<p style="color: #4b5563; font-size: 16px; line-height: 2;"><strong style="color: #F26522;">Innovation:</strong> Ständig neue Funktionen<br><strong style="color: #F26522;">Zuverlässigkeit:</strong> 99.9% Uptime<br><strong style="color: #F26522;">Support:</strong> 24/7 Kundenbetreuung<br><strong style="color: #F26522;">Transparenz:</strong> Keine versteckten Kosten</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'af1'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'gap' => 'no',
            'padding' => ['unit' => 'px', 'top' => '0', 'right' => '0', 'bottom' => '0', 'left' => '0', 'isLinked' => true],
        ],
        'elements' => [
            [
                'id' => 'af1c'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'af1w'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => ['html' => $footer_html],
                    ],
                ],
            ],
        ],
    ],
];

// CONTACT PAGE
$contact_content = [
    [
        'id' => 'ch1'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'gap' => 'no',
            'padding' => ['unit' => 'px', 'top' => '0', 'right' => '0', 'bottom' => '0', 'left' => '0', 'isLinked' => true],
        ],
        'elements' => [
            [
                'id' => 'ch1c'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'ch1w'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => ['html' => $header_html],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'contacthero'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'min_height' => ['unit' => 'px', 'size' => 300],
            'background_background' => 'gradient',
            'background_color' => '#FFF5F0',
            'background_color_b' => '#FFFFFF',
            'padding' => ['unit' => 'px', 'top' => '80', 'right' => '40', 'bottom' => '80', 'left' => '40', 'isLinked' => false],
        ],
        'elements' => [
            [
                'id' => 'contactheroc'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'contactherow'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'heading',
                        'settings' => [
                            'title' => 'Kontakt',
                            'align' => 'center',
                            'header_size' => 'h1',
                            'title_color' => '#1a1a2e',
                            'typography_font_size' => ['unit' => 'px', 'size' => 48],
                            'typography_font_weight' => '700',
                        ],
                    ],
                    [
                        'id' => 'contactherow2'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'text-editor',
                        'settings' => [
                            'editor' => '<p style="text-align: center; color: #6b7280; font-size: 20px;">Wir freuen uns von Ihnen zu hören</p>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'contactcards'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'padding' => ['unit' => 'px', 'top' => '60', 'right' => '40', 'bottom' => '80', 'left' => '40', 'isLinked' => false],
        ],
        'elements' => [
            [
                'id' => 'contactc1'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'contactw1'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">✉️</div><h3 style="color: #1a1a2e; font-size: 18px; font-weight: 600; margin: 0 0 10px;">Email</h3><p style="color: #6b7280; font-size: 15px; margin: 0;">info@mcommerce.de</p></div>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'contactc2'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'contactw2'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">📞</div><h3 style="color: #1a1a2e; font-size: 18px; font-weight: 600; margin: 0 0 10px;">Telefon</h3><p style="color: #6b7280; font-size: 15px; margin: 0;">+49 123 456 789</p></div>',
                        ],
                    ],
                ],
            ],
            [
                'id' => 'contactc3'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 33],
                'elements' => [
                    [
                        'id' => 'contactw3'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => [
                            'html' => '<div style="background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;"><div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">📍</div><h3 style="color: #1a1a2e; font-size: 18px; font-weight: 600; margin: 0 0 10px;">Adresse</h3><p style="color: #6b7280; font-size: 15px; margin: 0;">Musterstraße 123<br>10115 Berlin</p></div>',
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'id' => 'cf1'.uniqid(),
        'elType' => 'section',
        'settings' => [
            'layout' => 'full_width',
            'gap' => 'no',
            'padding' => ['unit' => 'px', 'top' => '0', 'right' => '0', 'bottom' => '0', 'left' => '0', 'isLinked' => true],
        ],
        'elements' => [
            [
                'id' => 'cf1c'.uniqid(),
                'elType' => 'column',
                'settings' => ['_column_size' => 100],
                'elements' => [
                    [
                        'id' => 'cf1w'.uniqid(),
                        'elType' => 'widget',
                        'widgetType' => 'html',
                        'settings' => ['html' => $footer_html],
                    ],
                ],
            ],
        ],
    ],
];

function update_elementor_page($page_id, $content) {
    // Clear existing data
    delete_post_meta($page_id, '_elementor_data');
    delete_post_meta($page_id, '_elementor_css');
    
    // Set new data
    update_post_meta($page_id, '_elementor_data', wp_json_encode($content));
    update_post_meta($page_id, '_elementor_edit_mode', 'builder');
    update_post_meta($page_id, '_elementor_template_type', 'wp-page');
    update_post_meta($page_id, '_elementor_version', ELEMENTOR_VERSION);
    update_post_meta($page_id, '_wp_page_template', 'elementor_canvas');
    
    // Clear Elementor cache
    if (class_exists('\Elementor\Plugin')) {
        \Elementor\Plugin::$instance->files_manager->clear_cache();
    }
    
    return true;
}

echo "\n=== M.Commerce Pages Update ===\n\n";

// Update Home page
update_elementor_page(21, $home_content);
echo "Updated: Zuhause (Home) - ID: 21\n";

// Update About page
update_elementor_page(26, $about_content);
echo "Updated: Über Uns - ID: 26\n";

// Update Contact page
update_elementor_page(27, $contact_content);
echo "Updated: Kontakt - ID: 27\n";

// Clear all caches
if (function_exists('wp_cache_flush')) {
    wp_cache_flush();
}

echo "\n=== Done! ===\n";
echo "Visit: http://localhost:8080/\n";
