=== VersionIt ===
Contributors: zslabs,whiteshadow
Tags: js,css,resources
Requires at least: 3.3
Tested up to: 3.8
Stable tag: 1.0
License: GPLv2

== Description ==

Removes default version query strings from CSS/JS resources, appends the modified time to the filename, and creates the necessary .htaccess rewrites automagically.

= What's the benefit for you? =
When pushing up new versions of your files, you never have to worry about users seeing older versions of your site stuck in their cache! A simple helper plugin, yet crucial to keeping your sanity.

== Installation ==

1. Upload the `versionit` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= I activated the plugin. Now what? =

Visit your site and view the source - you should see your CSS/JS resources changed from _http://YOURSITE.COM/wp-content/plugins/YOURPLUGIN/css/style.css?ver=3.4.2_ to something like _http://YOURSITE.COM/wp-content/plugins/YOURPLUGIN/css/style.1347022625.css_

= When I activate the plugin, I see the error, "Please make sure your .htaccess file is writable" =

This means that either you have not saved your permalinks from the default config, or you have a permissions issue. Your host can help you with the latter.

= None of my CSS/JS are loading! =

Please see previous question.

= Can you add `feature-x`? =

Sure! I'm always open to knew ideas. Just create a new [issue](https://github.com/zslabs/versionit/issues) and I'll take a gander.

== Changelog ==

= 1.0 =
* Tested in 3.8
* This puppy should be ready to go! Now considered feature-complete.

= 0.1 =
* Initial release