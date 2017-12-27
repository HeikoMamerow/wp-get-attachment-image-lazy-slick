# WP-get-attachment-image-lazy-Slick #

WordPress Plugin sets attachment image markup for [Slick](http://kenwheeler.github.io/slick/) lazy loading.

## Description
Slick slider needs a special markup for his lazy loading. This plugin use the origin function *wp_get_attachment_image()* but changed the attributes *src* to *data-lazy* and *srcset* to *data-srcset*.

## Frequently Asked Questions 
### How to use?

* Install and activate the plugin.
* Instead of using wp_get_attachment_image() use wp_get_attachment_image_lazy_slick() in your theme.
* The parameters are same with like [wp_get_attachment_image()](https://developer.wordpress.org/reference/functions/wp_get_attachment_image/#parameters)

### Will this plugin install Slick?
No, you need to install Slick separately.

## Changelog
### 1.0.0
* Initial release.
