<?php

// === Add scripts and stylesheets =============================================
function startwordpress_scripts() {
	wp_enqueue_style('css-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6');
	wp_enqueue_style('css-blog', get_template_directory_uri() . '/css/blog.css');
  wp_enqueue_script('js-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.3.1', true);
	wp_enqueue_script('js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('js-jquery'), '4.0.0', true);
  wp_enqueue_script('js-main', get_template_directory_uri() . '/js/main.js', array('js-jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'startwordpress_scripts');

// === Add additional Wordpress Features =======================================
add_theme_support('title-tag');       // WordPress Titles
add_theme_support('post-thumbnails'); // Support Featured Images

// === Custom DSS theme settings ===============================================
function custom_settings_add_menu() {
	$dss_icon = "data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjU2IiBoZWlnaHQ9IjI1NiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8cGF0aCBmaWxsPSIjOWNhMWE2IiBkPSJtMTI3LjE5OTk5NywxMzguMzk5OTk0YzE4LjgwMDAwMywwIDI3LjUsMTQuMzAwMDAzIDI5LjMwMDAwMywzNC41YzAuMzk5OTk0LDQuODAwMDAzIDAsMTEuODk5OTk0IC0wLjYwMDAwNiwyMC4wOTk5OTFjLTIuMDk5OTkxLDI3LjIwMDAxMiAtNC41LDYwLjYwMDAwNiAxMy42MDAwMDYsNjAuNjAwMDA2YzE1LjMwMDAwMywwIDIzLjE5OTk5NywtMjkuMzk5OTk0IDI3LjY5OTk5NywtNjIuODAwMDAzYzQuNDAwMDA5LC0zMy4wOTk5OTEgLTAuMzAwMDAzLC00OS41OTk5OTEgMiwtNjQuMjk5OTk1YzQuMzAwMDAzLC0yNy45MDAwMDIgMjguNjk5OTk3LC01Mi45MDAwMDIgMjEuMTk5OTk3LC04OC40MDAwMDJjLTQuMTk5OTk3LC0xOS43MDAwMDEgLTE1LC0yOS4wMDAwMDEgLTI1Ljc5OTk4OCwtMzIuOTAwMDAxYy0yNC44MDAwMDMsLTkgLTQwLjgwMDAwMyw4LjQgLTY3LjQwMDAwOSw4LjRzLTQyLjU5OTk5OCwtMTcuNDk5OTkgLTY3LjM5OTk5OCwtOC40OTk5OWMtMTAuNzAwMDAxLDMuOSAtMjEuNTk5OTk4LDEzLjE5OTk5OSAtMjUuNzk5OTk5LDMyLjljLTcuNSwzNS41IDE2Ljc5OTk5OSw2MC41IDIxLjIwMDAwMSw4OC40MDAwMDJjMi4yOTk5OTksMTQuNzAwMDA1IC0yLjQwMDAwMiwzMS4yMDAwMDUgMiw2NC4yOTk5OTVjNC41LDMzLjUgMTIuMzk5OTk4LDYyLjgwMDAwMyAyNy43MDAwMDEsNjIuODAwMDAzYzE4LjA5OTk5OCwwIDE1LjY5OTk5NywtMzMuMzk5OTk0IDEzLjU5OTk5OCwtNjAuNTk5OTkxYy0wLjU5OTk5OCwtOC4xOTk5OTcgLTEuMDk5OTk4LC0xNS4xOTk5OTcgLTAuNTk5OTk4LC0yMC4xMDAwMDZjMS43OTk5OTUsLTIwLjE5OTk5NyAxMC41OTk5OTgsLTM0LjQwMDAwOSAyOS4yOTk5OTUsLTM0LjQwMDAwOXoiIGlkPSJYTUxJRF8xXyIvPgo8L3N2Zz4=";
  add_menu_page('Custom Settings', 'DSS Theme Settings', 'manage_options', 'custom-settings', 'custom_settings_page', $dss_icon, 99);
}
add_action('admin_menu', 'custom_settings_add_menu');

// Callback function for add_menu_page. HTML for how the custom settings should look like
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>DSS Theme Settings</h1>
    <form method="post" action="options.php">
      <?php
      //settings_fields('images'); TODO
      settings_fields('social_media');
      do_settings_sections('theme-options');      
      submit_button(); 
      ?>          
    </form>
  </div>
<?php }

// Callback function that creates a textbox to input
function add_custom_image() { ?>
	<input type="text" name="blog_welcome_background_image" id="blog_welcome_background_image" \
		value="<?php
			$option = get_option('blog_welcome_background_image');
			if (empty($option)) {
				$default = get_bloginfo('template_directory') . "/img/dentistry-building3.jpg";
				update_option('blog_welcome_background_image', $default);
				echo $default;
			} else {
				echo get_bloginfo('stylesheet_directory');
				//echo "blah";
			}
		?>" \
	/>
<?php }

// Callback function for allowing one to input the url for a given social media (Facebook, Instagram, etc.)
function add_social_media_url($social_media) { ?>
  <input type="text" name="<?php echo "$social_media" ?>" id="<?php echo "$social_media" ?>" value="<?php echo get_option($social_media); ?>" />
<?php }

// Sets up DSS theme settings page; will be linked to settings_fields($section) in custom_settings_page()
function custom_settings_page_setup() {
  // Images section. For customizing logos, background images, etc. TODO
  //add_settings_section('images', 'Images', null, 'theme-options');
  //add_settings_field('blog_welcome_background_image', 'Front Page Background Image', 'add_custom_image', 'theme-options', 'images');
  //register_setting('images', 'blog_welcome_background_image');
  // TODO

  // Social media section. Add custom links to Facebook, Flickr, Instagram, etc.
  add_settings_section('social_media', 'Social Media Settings', null, 'theme-options');
  $fields = array(
    array('facebook',   'Facebook Link'),
    array('flickr',     'Flickr Link'),
    array('instagram',  'Instagram Link')
  );
  foreach($fields as $field) {
    add_settings_field($field[0], $field[1], 'add_social_media_url', 'theme-options', 'social_media', $field[0]);
    register_setting('social_media', $field[0]);
  }
}
add_action('admin_init', 'custom_settings_page_setup');