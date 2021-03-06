# Getting Started

- Install WordPress
- Debug mode, .gitignore

# Theme

- [Theme Developer Handbook](https://developer.wordpress.org/themes/)
- [Template Hierarchy](https://wphierarchy.com/)


# Child Theme

## Minimum requirements:

- [style.css](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/)
- [functions.php](https://developer.wordpress.org/themes/basics/theme-functions/)

Links:

- [Child Themes](https://developer.wordpress.org/themes/advanced-topics/child-themes/)
- [Linking Theme Files & Directories](https://developer.wordpress.org/themes/basics/linking-theme-files-directories/)

### Further reading on linking theme files and directories:

#### Prior to 4.7 logic

Child theme:
- [get_stylesheet_directory()](https://developer.wordpress.org/reference/functions/get_stylesheet_directory/)
- [get_stylesheet_directory_uri()](https://developer.wordpress.org/reference/functions/get_stylesheet_directory_uri/)

Parent or current theme:
- [get_template_directory()](https://developer.wordpress.org/reference/functions/get_template_directory/)
- [get_template_directory_uri()](https://developer.wordpress.org/reference/functions/get_template_directory_uri/)

#### After 4.7 logic

Child or current theme:
- [get_theme_file_uri()](https://developer.wordpress.org/reference/functions/get_theme_file_uri/)
- [get_theme_file_path()](https://developer.wordpress.org/reference/functions/get_theme_file_path/)

Parent theme:
- [get_parent_theme_file_uri()](https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/)
- [get_parent_theme_file_path()](https://developer.wordpress.org/reference/functions/get_parent_theme_file_path/)

## Modifying output through child theme:

### 1. style.css

### 2. Rewriting template files

Links:

- [Template Files](https://developer.wordpress.org/themes/template-files-section/)

### 3. Overriding parent's theme support

Links:

- [after_setup_theme()](https://developer.wordpress.org/reference/hooks/after_setup_theme/)
- [add_theme_support()](https://developer.wordpress.org/reference/functions/add_theme_support/)

### 4. Parent's custom hooks

Links:

- [apply_filters()](https://developer.wordpress.org/reference/functions/apply_filters/)
- [do_action()](https://developer.wordpress.org/reference/functions/do_action/)
- [add_filter()](https://developer.wordpress.org/reference/functions/add_filter/)
- [add_action()](https://developer.wordpress.org/reference/functions/add_action/)

### 5. WordPress core hooks

Links:

- [remove_filter()](https://developer.wordpress.org/reference/functions/remove_filter/)
- [remove_action()](https://developer.wordpress.org/reference/functions/remove_action/)

### 6. Parent's custom functions

Links:

- [function_exists()](http://php.net/manual/en/function.function-exists.php)

# Custom Theme

1. Import HTML template
2. style.css, index.php, template tags:
	1. [Template Tags](https://developer.wordpress.org/themes/basics/template-tags/)
	2. [Linking Theme Files & Directories](https://developer.wordpress.org/themes/basics/linking-theme-files-directories/)
	3. wp-includes/theme-compat/header.php
	4. wp-includes/theme-compat/footer.php
	5. wp-includes/theme-compat/sidebar.php
3. [The Loop](https://developer.wordpress.org/themes/basics/the-loop/)
4. header.php
	1. [wp_head()](https://developer.wordpress.org/reference/functions/wp_head/)
	2. [body_class()](https://developer.wordpress.org/reference/functions/body_class/)
5. footer.php
	1. [wp_footer()](https://developer.wordpress.org/reference/functions/wp_footer/)
6. functions.php and document head
	1. Enqueue styles - [wp_enqueue_style()](https://developer.wordpress.org/reference/functions/wp_enqueue_style/)
	2. [language_attributes()](https://developer.wordpress.org/reference/functions/language_attributes/)
	3. [bloginfo()](https://developer.wordpress.org/reference/functions/bloginfo/)
	4. [add_theme_support()](https://developer.wordpress.org/reference/functions/add_theme_support/) - 'automatic-feed-links' and 'title-tag'
	5. Enqueue scripts - [wp_enqueue_script()](https://developer.wordpress.org/reference/functions/wp_enqueue_script/)
	6. wp-includes/script-loader.php
7. Custom logo
	1. [add_theme_support()](https://developer.wordpress.org/reference/functions/add_theme_support/) - 'custom-logo'
	2. [home_url()](https://developer.wordpress.org/reference/functions/home_url/)
8. Menu
	1. [register_nav_menus()](https://developer.wordpress.org/reference/functions/register_nav_menus/)
	2. [wp_nav_menu()](https://developer.wordpress.org/reference/functions/wp_nav_menu/)
	3. [get_template_part()](https://developer.wordpress.org/reference/functions/get_template_part/)
	4. Force WordPress menu markup to match Bootstrap's - custom.js
	5. Set social icons in menu via css
9. Set textdomain for translation - [load_theme_textdomain()](https://developer.wordpress.org/reference/functions/load_theme_textdomain/)
10. Widgets
	1. [register_sidebar()](https://developer.wordpress.org/reference/functions/register_sidebar/)
	2. [dynamic_sidebar()](https://developer.wordpress.org/reference/functions/dynamic_sidebar/)
	3. [get_sidebar()](https://developer.wordpress.org/reference/functions/get_sidebar/)
11. Blog archive - index.php
	1. [Template Hierarchy](https://wphierarchy.com/)
	2. [the_title()](https://developer.wordpress.org/reference/functions/the_title/)
	3. [the_author()](https://developer.wordpress.org/reference/functions/the_author/)
	4. [comments_number()](https://developer.wordpress.org/reference/functions/comments_number/)
	5. [the_excerpt()](https://developer.wordpress.org/reference/functions/the_excerpt/)
	6. [get_permalink()](https://developer.wordpress.org/reference/functions/get_permalink/)
	7. Filters: [excerpt_more](https://developer.wordpress.org/reference/hooks/excerpt_more/) and [excerpt_length](https://developer.wordpress.org/reference/hooks/excerpt_length/)
12. Featured image
	1. [add_theme_support()](https://developer.wordpress.org/reference/functions/add_theme_support/) - 'post-thumbnails'
	2. Conditional [has_post_thumbnail()](https://developer.wordpress.org/reference/functions/has_post_thumbnail/)
	3. [the_post_thumbnail()](https://developer.wordpress.org/reference/functions/the_post_thumbnail/)
13. Posts pagination
	1. [the_posts_pagination()](https://developer.wordpress.org/reference/functions/the_posts_pagination/)
14. Custom page template
	1. [Page Templates](https://developer.wordpress.org/themes/template-files-section/page-template-files/)
	2. [WP_Query()](https://developer.wordpress.org/reference/classes/wp_query/)
15. Default page template
	1. [Page Templates](https://developer.wordpress.org/themes/template-files-section/page-template-files/)
16. Single post
	1. [is_single()](https://developer.wordpress.org/reference/functions/is_single/)
	2. [the_post_navigation()](https://developer.wordpress.org/reference/functions/the_post_navigation/)
17. Contact page template
	1. [is_page_template()](https://developer.wordpress.org/reference/functions/is_page_template/)
	2. [wp_localize_script()](https://developer.wordpress.org/reference/functions/wp_localize_script/)
	3. [parseFloat()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/parseFloat)
18. Contact page template widgets
	1. [is_active_sidebar()](https://developer.wordpress.org/reference/functions/is_active_sidebar/)
	2. [dynamic_sidebar()](https://developer.wordpress.org/reference/functions/dynamic_sidebar/)
19. Contact Form 7
	1. [Plugin](https://wordpress.org/plugins/contact-form-7/)
20. Front page - Hero Slider
	1. [Page Templates](https://developer.wordpress.org/themes/template-files-section/page-template-files/)
	2. [the_post_thumbnail_url()](https://developer.wordpress.org/reference/functions/the_post_thumbnail_url/)
	3. [the_id()](https://developer.wordpress.org/reference/functions/the_id/)
	4. [the_permalink()](https://developer.wordpress.org/reference/functions/the_permalink/)
21. Front page - Blog feed
	1. [Featured Images & Post Thumbnails](https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/)
	2. [add_image_size()](https://developer.wordpress.org/reference/functions/add_image_size/)
	3. Plugin [Force Regenerate Thumbnails](https://wordpress.org/plugins/force-regenerate-thumbnails/)
	4. [is_front_page()](https://developer.wordpress.org/reference/functions/is_front_page/)
22. Front page - custom taxonomy query, widgets
	1. [WP_Query()](https://developer.wordpress.org/reference/classes/wp_query/)
23. Front page - featured author
	1. the_author_meta()
	2. get_the_category_by_ID()
	3. wpautop()
