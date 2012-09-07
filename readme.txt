=== VersionIt ===
Contributors: zslabs,whiteshadow
Tags: js,css,resources
Requires at least: 3.3
Tested up to: 3.4.2
Stable tag: 0.1
License: GPLv2

== Description ==

Removes default version query strings from CSS/JS resources, appends the modified time to the filename, and creates the necessary .htaccess rewrites automagically.

_Explanation from [wshadow](http://w-shadow.com/blog/2012/07/30/automatic-versioning-of-css-js/)_

If you’re a WordPress developer, this will probably sound familiar: you make a change to one of your scripts or style sheets, reload the page you’re working on to see the result, and… everything stays the same.

Of course, after a moment of confusion, you realise that you didn’t update the $version argument in your wp_register_script() or wp_register_style() call (you are using the dependency APIs and not outputting the <script> or <style> tags directly, right?), so the browser is still using its old, cached version of the file. So you either force-refresh the page, or go back to the source code and change the version.

This can become annoying very quickly. Worse yet, if you forget to properly version your dependencies when you ship the code to users, you can get a number of seemingly bogus bug reports caused by their browsers still using the cached scripts and styles instead of the new files.

One common solution is to append the file modification time to the URL. This will cause the browser to automatically reload the file when it changes.

_I can't even begin to tell you how much cooler this will make your site, because honestly... it won't. BUT, it sure saves some headaches!_

== Installation ==

1. Upload the `versionit` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= I activated the plugin. Now what? =

Visit your site and view the source - you should see your CSS/JS resources changed from _http://YOURSITE.COM/wp-content/plugins/YOURPLUGIN/css/style.css?ver=3.4.2_ to something like _http://YOURSITE.COM/wp-content/plugins/YOURPLUGIN/css/style.1347022625.css_

= When I activate the plugin, I see the error, "Please make sure your .htaccess file is writable" =

This means that either you have not saved your permalinks from the default config, or you have a permissions issue. Your host can help you with the latter.

= Can you add `feature-x`? =

Sure! I'm always open to knew ideas. Just create a new [issue](https://github.com/zslabs/versionit/issues) and I'll take a gander.

== Changelog ==

= 0.1 =
* Initial release