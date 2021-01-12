=== Glorious Services & Support by GloriousThemes ===
Contributors: gloriousthemes, nirajkashyap
Tags: services,support,gloriousthemes,
Requires at least: 4.6
License: GPL2
Tested up to: 5.6
Requires PHP: 5.4
Stable tag: 1.0.0

No setup required! Install the plugin, and this plugin will do the rest. 

== Description ==
Glorious Services & Support by GloriousThemes helps customers and users who are using GloriouThemes themes and Plugins to directly contact the Support Team to get support for the plugin/theme and fix issues quickly. It also helps you upgrade your theme/plugins and services from the WordPress Dashboard itself.

= What does the plugin actually do =
* The plugin handles most issues that WordPress has with SSL, like when you're behind a reverse proxy/loadbalancer, or when no headers are passed which WordPress can use to detect SSL.
* All incoming requests are redirected to https. Default with an internal WordPress redirect, but you can also enable a .htaccess redirect.
* The siteurl and homeurl are changed to https.
* Your insecure content is fixed by replacing all http:// URL's with https://, except hyperlinks to other domains. Dynamically, so no database changes are made (except for the siteurl and homeurl).


[contact](https://www.really-simple-ssl.com/contact/) me if you have any questions, issues, or suggestions. Really Simple SSL is developed by [Really Simple Plugins](https://www.really-simple-plugins.com).

== Installation ==
To install this plugin:

1. Make a backup!
2. Install your SSL certificate
3. Download the plugin
4. Upload the plugin to the wp-content/plugins directory,
5. Go to “plugins” in your WordPress admin, then click activate.
6. You will now see a notice asking you to enable SSL. Click it and log in again.

== Frequently Asked Questions ==

= Knowledge base =
For more detailed explanations and documentation on redirect loops, deactivating, mixed content, errors, and so on, please search the [documentation](https://www.really-simple-ssl.com/knowledge-base/)

= Does the mixed content fixer make my site slower? =
On a site where the source consists of about 60.000 characters, the delay caused by the mixed content fixer is about 0.00188 seconds. If this is too much for you, fix the mixed content manually and deactivate it in the settings.

== Changelog ==
= 1.0.0 =
* Improved installation instructions

== Upgrade notice ==
On settings page load, the .htaccess file is no rewritten. If you have made .htaccess customizations to the RSSSL block and have not blocked the plugin from editing it, do so before upgrading.
Always back up before any upgrade. Especially .htaccess, wp-config.php and the plugin folder. This way you can easily roll back.

== Screenshots ==
1. Easily migrate your website to SSL with one click
2. Improve security with Really Simple SSL. Fully guided and documented.