=== ItalyStrap ===
Contributors: overclokk
Donate link: http://www.italystrap.it/
Tags: breadcrumbs, breadcrumb, seo, performance, schema.org, rich snippet, bootstrap, twitter bootstrap, css
Requires at least: 4.0
Tested up to: 4.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Make your web site more powerfull.

== Description ==

[ItalyStrap](http://www.italystrap.it/) will add powerful features to your WordPRess site.

**Features include:**

* **Breadcrumbs.** Make your WordPress site SEO friendly with Breadcrumbs and Schema.org and get Google rich snippet in SERP, fully customizable for your purpose (ItalyStrap breadcrumbs class is 10 times faster than Yoast Breadcrumbs).

== Installation ==

1. Install ItalyStrap either via the WordPress.org plugin directory, or by uploading the files to the `/wp-content/plugins/` directory in your server.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. After activating ItalyStrap, read the documentation for any kind of customization.
6. That's it.  You're ready to go!

== Frequently Asked Questions ==

= How can I add breadcrumbs in my site? =

Add this code in your template files:

`<?php if ( class_exists('ItalyStrapBreadcrumbs') ) {
	
		new ItalyStrapBreadcrumbs();
	
	} ?>`

= What if haven't I got Bootstrap CSS? =

If you haven't Bootstrap CSS style for breadcrumbs don't worry about it, you have 2 options, firts option you have to develope your own style for breadcrumbs, second option you can add this css code in your css style theme:

`.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{content:"/\00a0";padding:0 5px;color:#ccc}.breadcrumb>.active{color:#777}`

For more informations read the documentation

== Screenshots ==

1. Default breadcrumbs (With Bootstrap CSS)
2. Custom breadcrumbs (With Bootstrap CSS)
3. Breadcrumbs in page (With Bootstrap CSS)

== Changelog ==

= 1.0.2 =
Release Date: January 8th, 2015

Dev time: 1h

* Fix documentation link in admin dashboard

= 1.0.1 =
Release Date: January 8th, 2015

Dev time: 1h

* Update Breadcrumbs documentation

= 1.0.0 =
Release Date: January 7th, 2015

Dev time: 100h

* First release

== Upgrade Notice ==

= 1.0.2 =
This version fixes a documentation link in admin dashboard.  Upgrade as soon as possible

= 1.0.1 =
This version updates Breadcrumbs documentation.  Upgrade as soon as possible

= 1.0.0 =
First release.