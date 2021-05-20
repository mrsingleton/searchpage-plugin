# Search Page Plugin
WordPress plugin for creating a basic search page template for your WP site if your theme does not include one.

Not all themes display widget or header search fields in intuitive ways, so choose this plugin's "Search Page" template to offer users a dedicated, reliable, accessible place to search your site's content.

## Customize this plugin
I drew inspiration for this WordPress plugin by combining two ideas: I wanted to add a useful but non-standard WordPress page template to a site, but instead of having to do so manually, could it be pluginized?

I already knew that the WordPress Codex had documentation for how to include various page templates, including my interest -- a full page search template. So I did a few searches to find the second component and it didn't take long to find a tutorial for creating a plugin that automatically adds a page template to any theme.

So the majority of the work behind this plugin was coded by Harri Bell-Thomas and published by WPExplorer. Thank you open source community! Likewise, I'm sharing my particular approach here because you could customize things further by determining the contents of a non-standard page that you would want for your own purposes and adjust that template code accordingly.

### Edit 1: Declaration Comments
Every plugin's main PHP document begins with a comment section in which you declare very standard details that distinguish your plugin from others. Make the following section your own by editing the name, description, uri, version, author, and author uri.

```php
<?php
/*
Plugin Name: Search Page Plugin
Description: This WordPress plugin is based on WPExplorer.com's tutorial
  "Add Page Templates to WordPress with a Plugin" by Harri Bell-Thomas.
  See https://www.wpexplorer.com/wordpress-page-templates-plugin/
Plugin URI: https://github.com/mrsingleton/searchpage_plugin
Version: 1.0
Author: Malik Singleton
Author URI: http://maliksingleton.info/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.txt
*/
```

### Edits 2 and 3: Class Slug
Update the plugin's unique identifier in the initial block of code that instantiates the class. In my case, I changed the original tutorial's "PageTemplater" to a name that suits my purposes, i.e. "SearchPage". You can use camel-casing or include the underscore character but your slug name can't contain any spaces.

Harri's example:

```php
class PageTemplater {

	/**
	 * A reference to an instance of this class.
	 */
	private static $instance;

	/**
	 * The array of templates that this plugin tracks.
	 */
	protected $templates;

	/**
	 * Returns an instance of this class.
	 */
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new PageTemplater();
		}

		return self::$instance;

	}
```

The tutorial explains in detail what the code is doing but the quick and dirty edits to make are right at the beginning and almost at the end.

My edits:

```php
class searchpage_plugin {
```

```php
		if ( null == self::$instance ) {
			self::$instance = new searchpage_plugin();
		}
```

### Edit 4: Template Array
In the next function, which begins `private function __construct() {` look down at the bottom of it and edit the array for your own purposes. Note that there is a comment that reads `// Add your templates to this array.`

```php
		$this->templates = array(
			'goodtobebad-template.php' => 'It\'s Good to Be Bad',
		);
```

My version became:

```php
		$this->templates = array(
			'searchpage_template.php' => 'Search Page Template',
		);
```

### Edit 5: Action Call
The final edit to make is at the very end what the funciton is called and acted upon:

```php
add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );
```

My version became:

```php
add_action( 'plugins_loaded', array( 'searchpage_plugin', 'get_instance' ) );
```

## Load it up
Save the files
Name them accordingly
Put them in a folder
Upload the folder to your plugins directory
Log in to your admin and navigate to the Plugins section
Activate the new plugin
Create a new page or edit an existing page
Use the page template dropdown menu
Select the new page template
Save the page
View it on the front end
Did it work?
