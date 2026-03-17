=== Yotako - Convert Figma Designs ===
Contributors: yotako
Tags: ai, convert, domain, figma to website, figma to wordpress, figma wordpress, hosting, theme, website, wordpress design, wordpress theme
Requires at least: 4.7
Tested up to: 6.9
Stable tag: 1.2.20
Requires PHP: 7.0
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Create Figma designs to professional WordPress themes with AI. Ready to download or publish online in 1 click. Ideal for designers, freelancers, and business owners.

== Description ==

Convert Figma designs into fully editable WordPress themes in just a few clicks. No coding required.

== Installation ==

1. Download and extract the plugin ZIP file.
2. Upload the plugin folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the "Plugins" menu in WordPress.
4. Run and Enjoy!

== Frequently Asked Questions ==

= Where do I get support? =
The plugin integrates a Live Chat icon you can use to talk with our Customer Support anytime!

= Is this plugin compatible with Gutenberg and the WordPress editor? =
Yes, our AI produces standard WordPress themes that you can edit easily. Check [how to edit here](https://docs.yotako.io/edit-your-wordpress-theme/).

== Changelog ==

= 1.2.20 =
* Fix dashboard preview URL causing redirect issues
* Improve finished build button layout and styling
* Always load artboard thumbnails by default

= 1.2.19 =
* Add "Free Alternative: Use Figma Plugin" component to all error screens
* Add FIGMA_SERVER_ERROR handling with user-friendly UI
* Improve error messaging for Figma API issues

= 1.2.18 =
* Better error handling for Figma permission errors (403 vs 401)

= 1.2.17 =
* Minified styles for faster loading and smaller plugin size

= 1.2.16 =
* Fixed styles

= 1.2.15 =
* Add comprehensive crash reporting with user email, response codes, and error details
* Fix auth error UX: show "Reconnect Figma" instead of useless "Try Again" button
* Persist Figma file ID to localStorage to survive browser refresh
* Fix logout to properly clear localStorage and generate fresh OAuth session

= 1.2.14 =
* Always load screenshots for AI (batched with images, no extra API calls)
* Remove screenshot opt-in setting - thumbnails now load automatically

= 1.2.13 =
* Enable auto-updates by default for seamless security and feature updates
* Fix asset cache busting - use dynamic version instead of hardcoded 1.1.0

= 1.2.11 =
* Fix stale closures, error handling, and add failedImages UI
* Use getState() pattern to avoid stale closures in async callbacks
* Add try/catch for JSON.parse in WS message handler
* Add try/catch for localStorage history parsing
* Reset failedImages on retry
* Move getThemeUrl into try/catch block
* Display failed images warning in FinishedBuild component
* Add IMAGE_TOO_LARGE error type

= 1.2.10 =
* Add warnings pre-figma token expiration and offers reconnetion

= 1.2.9 =
* Add automatic reconnection with exponential backoff (max 3 attempts)
* Handle intentional vs unexpected WebSocket closes
* Detect rate limit errors in BUILD_STATE and show RateLimitError UI
* Use buildState.message for better error messages
* Add crash reporting for rate limit errors during build
* Ported improvements from Figma plugin.

= 1.2.8 =
* Add expiresAt field to FigmaAuth store (7 day default)                                                                                                  
* Check token expiration on component mount                                                                                                               
* Auto-logout and show message if token expired                                                                                                           
* Prevents FIGMA_AUTH_FAILED errors from expired stored tokens
* Add auth guard to PageSelection page

= 1.2.7 =
* Improve download theme instructions modal styling
* Add blue gradient header with better typography
* Move navigation arrows to overlay on image with circular buttons
* Add step indicators (dots) for direct navigation
* Add step counter text
* Improve tab labels and spacing
* Make video section responsive with proper aspect ratio
* Better overall visual hierarchy and padding
    
= 1.2.6 =
* Validates scenegraph.project.id exists before initiating WebSocket
* Prevents connection to build:undefined when project creation fails
* Shows clear error message when project creation fails silently

= 1.2.5 =
* Fixed WPMaven.ai cards

= 1.2.4 =
* Fixed fonts

= 1.2.3 =
* Improved Figma API calls
* Added WPMaven styling

= 1.2.2 =
* Minor bug fixes

= 1.2.1 =
* Improved Figma URL validation to only accept direct file/design URLs
* Updated error message for invalid URLs

= 1.2.0 =
* Option to load screenshots on-demand with preference memory for paid users
* Increased OAuth popup size to prevent scrolling
* Fixed OAuth disconnect functionality
* Updated sidebar links and documentation URLs
* New gradient title design for better branding
* Added smooth gallery carousel showcasing themes from 95K+ Figma users
* Screenshot loading optimization - saves Figma API calls for free tier users
* Added WPMaven waitlist promotion (AI-powered WordPress assistant)

= 1.1.0 =
* Added Figma OAuth authentication - connect directly with your Figma account
* Removed email requirement in favor of secure OAuth flow
* Improved user experience with persistent authentication

= 1.0.0 =
* Initial release.

== External services ==
Live Chat: This plugin integrates Crisp Chat (https://crisp.chat/), which provides live chat support on the website. By using Crisp Chat, users may be subject to their privacy policy and terms of service. For more information, visit: https://crisp.chat/en/privacy/.

== Upgrade Notice ==

= 1.2.20 =
* Fix dashboard preview URL causing redirect issues
* Improve finished build button layout and styling
* Always load artboard thumbnails by default

= 1.2.19 =
* Add "Free Alternative: Use Figma Plugin" component to all error screens
* Add FIGMA_SERVER_ERROR handling with user-friendly UI
* Improve error messaging for Figma API issues

= 1.2.18 =
* Better error handling for Figma permission errors (403 vs 401)

= 1.2.17 =
* Minified styles for faster loading and smaller plugin size

= 1.2.16 =
* Fixed styles

= 1.2.15 =
* Add comprehensive crash reporting with user email, response codes, and error details
* Fix auth error UX: show "Reconnect Figma" instead of useless "Try Again" button
* Persist Figma file ID to localStorage to survive browser refresh
* Fix logout to properly clear localStorage and generate fresh OAuth session

= 1.2.14 =
* Always load screenshots for AI (batched with images, no extra API calls)
* Remove screenshot opt-in setting - thumbnails now load automatically

= 1.2.13 =
* Enable auto-updates by default for seamless security and feature updates
* Fix asset cache busting - use dynamic version instead of hardcoded 1.1.0

= 1.2.11 =
* Fix stale closures, error handling, and add failedImages UI
* Use getState() pattern to avoid stale closures in async callbacks
* Add try/catch for JSON.parse in WS message handler
* Add try/catch for localStorage history parsing
* Reset failedImages on retry
* Move getThemeUrl into try/catch block
* Display failed images warning in FinishedBuild component
* Add IMAGE_TOO_LARGE error type

= 1.2.10 =
* Add warnings pre-figma token expiration and offers reconnetion

= 1.2.9 =
* Add automatic reconnection with exponential backoff (max 3 attempts)
* Handle intentional vs unexpected WebSocket closes
* Detect rate limit errors in BUILD_STATE and show RateLimitError UI
* Use buildState.message for better error messages
* Add crash reporting for rate limit errors during build
* Ported improvements from Figma plugin.

= 1.2.8 =
* Add expiresAt field to FigmaAuth store (7 day default)                                                                                                  
* Check token expiration on component mount                                                                                                               
* Auto-logout and show message if token expired                                                                                                           
* Prevents FIGMA_AUTH_FAILED errors from expired stored tokens
* Add auth guard to PageSelection page

= 1.2.7 =
* Improve download theme instructions modal styling
* Add blue gradient header with better typography
* Move navigation arrows to overlay on image with circular buttons
* Add step indicators (dots) for direct navigation
* Add step counter text
* Improve tab labels and spacing
* Make video section responsive with proper aspect ratio
* Better overall visual hierarchy and padding

= 1.2.6 =
* Validates scenegraph.project.id exists before initiating WebSocket
* Prevents connection to build:undefined when project creation fails
* Shows clear error message when project creation fails silently

= 1.2.5 =
* Fixed WPMaven.ai cards

= 1.2.4 =
* Fixed fonts

= 1.2.3 =
Improved Figma API calls

= 1.2.2 =
Minor bug fixes

= 1.2.1 =
Improved Figma URL validation to prevent invalid URLs.

= 1.2.0 =
New UI improvements, screenshot loading optimization to save Figma API calls, and WPMaven integration.

= 1.1.0 =
New Figma OAuth authentication - connect directly with your Figma account for a smoother experience.

= 1.0.0 =
Initial release.

== Credits ==

Developed by Yotako S.A.

== Support ==

For support, use the Live Chat icon available in the plugin or visit [https://figma-to-wordpress.com](https://figma-to-wordpress.com).
