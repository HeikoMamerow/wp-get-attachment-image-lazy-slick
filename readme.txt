=== WP-get-attachment-image-lazy-Slick ===
Contributors: heiko
Tags: Slick slider
Tested up to: 4.9.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Set attachment image markup for Slick lazy loading.

== Description ==
Slick slider needs a special markup for his lazy loading. This plugin use the origin function *wp_get_attachment_image()* but changed the attributes *src* to *data-lazy* and *srcset* to *data-srcset*.

== Frequently Asked Questions ==
= How to use? =

1. Install and activate the plugin.
1. Instead of using wp_get_attachment_image() use wp_get_attachment_image_lazy_slick() in your theme.
1. The parameters are same with like [wp_get_attachment_image()](https://developer.wordpress.org/reference/functions/wp_get_attachment_image/#parameters)

= Will this plugin install Slick? =
No, you need to install Slick separately.

== Changelog ==
= 1.0.0 =
* Initial release.