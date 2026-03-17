<?php
/**
 * Create pages with HTML content (no Elementor dependency)
 * Uses standard WordPress page template with custom HTML
 */

$header_html = '
<header style="background: #fff; padding: 15px 40px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 1000;">
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
</header>
';

$footer_html = '
<footer style="background: #1a1a2e; padding: 60px 40px 30px;">
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
</footer>
<div style="background: #13131f; padding: 20px; text-align: center;">
    <p style="color: #6b7280; font-size: 13px; margin: 0;">© 2024 M.Commerce. Alle Rechte vorbehalten.</p>
</div>
';

// HOME PAGE
$home_content = $header_html . '
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
</style>

<!-- Hero Section -->
<section style="background: linear-gradient(180deg, #FFF5F0 0%, #FFFFFF 100%); padding: 80px 40px; min-height: 500px;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; align-items: center; flex-wrap: wrap; gap: 40px;">
        <div style="flex: 1; min-width: 300px;">
            <h1 style="color: #1a1a2e; font-size: 48px; font-weight: 700; line-height: 1.2; margin-bottom: 25px;">Starten Sie Ihr E-Commerce Business heute</h1>
            <p style="color: #4b5563; font-size: 18px; line-height: 1.7; margin-bottom: 30px;">Die All-in-One Plattform für Ihren Online-Shop. Einfach zu bedienen, leistungsstark und skalierbar.</p>
            <div>
                <a href="/start" style="display: inline-block; background: #F26522; color: #fff; text-decoration: none; padding: 15px 32px; border-radius: 6px; font-size: 16px; font-weight: 600; margin-right: 15px;">Kostenlos starten</a>
                <a href="/demo" style="display: inline-block; background: transparent; color: #1a1a2e; text-decoration: none; padding: 15px 32px; border-radius: 6px; font-size: 16px; font-weight: 600; border: 2px solid #e5e7eb;">Demo ansehen</a>
            </div>
        </div>
        <div style="flex: 1; min-width: 300px;">
            <div style="background: linear-gradient(135deg, #F26522 0%, #ff8a50 100%); border-radius: 16px; height: 300px; display: flex; align-items: center; justify-content: center; box-shadow: 0 25px 50px rgba(242, 101, 34, 0.2);">
                <p style="color: #fff; font-size: 18px; text-align: center; margin: 0;">Dashboard Preview</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section style="padding: 80px 40px; background: #fff;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="color: #1a1a2e; font-size: 36px; font-weight: 700; text-align: center; margin-bottom: 50px;">Warum M.Commerce?</h2>
        <div style="display: flex; gap: 30px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 280px; background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;">
                <div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">⚡</div>
                <h3 style="color: #1a1a2e; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Schnell & Einfach</h3>
                <p style="color: #6b7280; font-size: 15px; line-height: 1.6;">Shop in Minuten einrichten. Keine technischen Kenntnisse nötig.</p>
            </div>
            <div style="flex: 1; min-width: 280px; background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;">
                <div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">🔒</div>
                <h3 style="color: #1a1a2e; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Sicher & Zuverlässig</h3>
                <p style="color: #6b7280; font-size: 15px; line-height: 1.6;">SSL-Verschlüsselung und sichere Zahlungsabwicklung.</p>
            </div>
            <div style="flex: 1; min-width: 280px; background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;">
                <div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">📈</div>
                <h3 style="color: #1a1a2e; font-size: 20px; font-weight: 600; margin-bottom: 12px;">Wachstum Analytik</h3>
                <p style="color: #6b7280; font-size: 15px; line-height: 1.6;">Detaillierte Einblicke in Verkäufe und Kundenverhalten.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="background: #F26522; padding: 70px 40px;">
    <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <h2 style="color: #fff; font-size: 36px; font-weight: 700; margin-bottom: 15px;">Bereit durchzustarten?</h2>
        <p style="color: rgba(255,255,255,0.9); font-size: 18px; margin-bottom: 30px;">Starten Sie noch heute kostenlos.</p>
        <a href="/start" style="display: inline-block; background: #fff; color: #F26522; text-decoration: none; padding: 15px 40px; border-radius: 6px; font-size: 16px; font-weight: 600;">Jetzt kostenlos starten</a>
    </div>
</section>
' . $footer_html;

// ABOUT PAGE
$about_content = $header_html . '
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
</style>

<section style="background: linear-gradient(180deg, #FFF5F0 0%, #FFFFFF 100%); padding: 80px 40px; text-align: center;">
    <h1 style="color: #1a1a2e; font-size: 48px; font-weight: 700; margin-bottom: 20px;">Über Uns</h1>
    <p style="color: #6b7280; font-size: 20px;">Lernen Sie das Team hinter M.Commerce kennen</p>
</section>

<section style="padding: 80px 40px;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; gap: 60px; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 300px;">
            <h2 style="color: #1a1a2e; font-size: 32px; font-weight: 700; margin-bottom: 20px;">Unsere Mission</h2>
            <p style="color: #4b5563; font-size: 16px; line-height: 1.8;">Bei M.Commerce glauben wir, dass jeder ein erfolgreiches Online-Business führen können sollte. Unsere Plattform macht E-Commerce für alle zugänglich.</p>
        </div>
        <div style="flex: 1; min-width: 300px;">
            <h2 style="color: #1a1a2e; font-size: 32px; font-weight: 700; margin-bottom: 20px;">Unsere Werte</h2>
            <p style="color: #4b5563; font-size: 16px; line-height: 2;"><strong style="color: #F26522;">Innovation:</strong> Ständig neue Funktionen<br><strong style="color: #F26522;">Zuverlässigkeit:</strong> 99.9% Uptime<br><strong style="color: #F26522;">Support:</strong> 24/7 Kundenbetreuung<br><strong style="color: #F26522;">Transparenz:</strong> Keine versteckten Kosten</p>
        </div>
    </div>
</section>
' . $footer_html;

// CONTACT PAGE
$contact_content = $header_html . '
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
</style>

<section style="background: linear-gradient(180deg, #FFF5F0 0%, #FFFFFF 100%); padding: 80px 40px; text-align: center;">
    <h1 style="color: #1a1a2e; font-size: 48px; font-weight: 700; margin-bottom: 20px;">Kontakt</h1>
    <p style="color: #6b7280; font-size: 20px;">Wir freuen uns von Ihnen zu hören</p>
</section>

<section style="padding: 60px 40px 80px;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; gap: 30px; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 280px; background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;">
            <div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">✉️</div>
            <h3 style="color: #1a1a2e; font-size: 18px; font-weight: 600; margin-bottom: 10px;">Email</h3>
            <p style="color: #6b7280; font-size: 15px;">info@mcommerce.de</p>
        </div>
        <div style="flex: 1; min-width: 280px; background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;">
            <div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">📞</div>
            <h3 style="color: #1a1a2e; font-size: 18px; font-weight: 600; margin-bottom: 10px;">Telefon</h3>
            <p style="color: #6b7280; font-size: 15px;">+49 123 456 789</p>
        </div>
        <div style="flex: 1; min-width: 280px; background: #f9fafb; padding: 35px; border-radius: 12px; text-align: center;">
            <div style="width: 60px; height: 60px; background: #FEF3EE; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 24px;">📍</div>
            <h3 style="color: #1a1a2e; font-size: 18px; font-weight: 600; margin-bottom: 10px;">Adresse</h3>
            <p style="color: #6b7280; font-size: 15px;">Musterstraße 123<br>10115 Berlin</p>
        </div>
    </div>
</section>
' . $footer_html;

// Update pages with HTML content (not Elementor)
function update_page_content($page_id, $content, $title) {
    // Remove Elementor meta
    delete_post_meta($page_id, '_elementor_data');
    delete_post_meta($page_id, '_elementor_edit_mode');
    delete_post_meta($page_id, '_elementor_template_type');
    delete_post_meta($page_id, '_elementor_css');
    
    // Update post with HTML content
    wp_update_post([
        'ID' => $page_id,
        'post_title' => $title,
        'post_content' => $content,
        'post_status' => 'publish',
    ]);
    
    // Use default template (not elementor_canvas)
    update_post_meta($page_id, '_wp_page_template', 'default');
    
    echo "Updated: {$title} (ID: {$page_id})\n";
}

echo "\n=== M.Commerce HTML Pages ===\n\n";

update_page_content(21, $home_content, 'Zuhause');
update_page_content(26, $about_content, 'Über Uns');
update_page_content(27, $contact_content, 'Kontakt');

// Clear caches
wp_cache_flush();

echo "\n=== Done! ===\n";
echo "Visit: http://localhost:8080/\n";
echo "\nNote: Pages now use standard HTML content.\n";
echo "You can edit them with Elementor by clicking 'Edit with Elementor' button.\n";
