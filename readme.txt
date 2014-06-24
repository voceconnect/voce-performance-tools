=== Voce Performance Tools ===
Contributors: kevinlangleyjr, voceplatforms
Tags: performance, cache, caching  
Requires at least: 3.3  
Tested up to: 3.8.1  
Stable tag: 1.1.1  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin provides numerous performance tools and functionalities to assist in developing high performance WordPress themes

== Description ==

This plugin provides numerous performance tools and functionalities to assist in developing high performance WordPress themes

= Includes =

* [WP TLC Transients](https://github.com/markjaquith/WP-TLC-Transients) - A WordPress transients interface with support for soft-expiration, background updating of the transients, and a chainable syntax that allows for one liners.
* [WP Cache Bucket](https://github.com/voceconnect/wp-cache-bucket) - A wrapper to WordPress' wp_cache to that allows tying multiple object cache entries to a single group that allows easy cache invalidation
* [Voce Widget Cache](https://github.com/voceconnect/voce-widget-cache) - Adds ability to easily cache widget output for better performance.
* [Voce Cached Nav](https://github.com/voceconnect/voce-cached-nav) - Serve cached copies of WordPress navigation menus by replacing your template calls to `wp_nav_menu` with `voce_cached_nav_menu`.
* [No Stampede Actions](https://github.com/voceconnect/no-stampede-actions) - A WordPress api to kicking off globally singleton actions. It will lock the action to prevent other requests from kicking off the same action
* Voce Cached Queries - Using TLC Transients, this caches custom queries that are run using the function `vpt_get_cached_query`


== Installation ==

1. Upload `voce-performance-tools` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==
= 1.1.1 =
* Adding Capistrano deploy scripts

= 1.1 =
* Updadting plugins

= 1.0 =
* Initial release.