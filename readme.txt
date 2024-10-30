=== Lazy Load Image Filter ===
Contributors: chriskroon
Tags: Lazy Load, Performance, Image, Lazy = loading
Requires at least: 4.0.0
Tested up to: 6.0.0
Requires PHP: 7.0.0
Stable tag: 1.0.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

The Lazy Load Image Filter plugin makes every image in your WordPress site use lazy loading to drasticly increase performance!
Why this plugin? This plugin does rely on the browser's build in image performance features which means no extra JavaScript or PHP execution time! Simplicity to the max.

== Description ==
 
### Lazy Load Image Filter

This plugin filters all content your WordPress site generates and add automaticly the lazy tag to all images. This will increase performance drasticly!
Why this plugin? This plugin does rely on the browser's build in image performance features which means no extra JavaScript or PHP execution time! Simplicity to the max.

=== Installation - From WordPress Admin ===
* Go to 'Plugins > Add new'
* Search for "Lazy Load Image Filter"
* Hit Install Now, and Activate after that

=== Manual ===
* Upload the `lazy-load-wordpress-image-filter` folder to the `/wp-content/plugins` directory
* Activate through the WordPress admin from 'Plugins > Installed Plugins'

=== After Installation ===
That's it, don't want to use it anymore? Just uninstall the plugin.

=== Changelog ===
** 1.0.3 **
Changed hook to fix conflicts with certain thema's

** 1.0.4 **
Increase the hook length to also incluse custom resources and exclude admin area

** 1.0.5 **
Fix empty buffer notice
