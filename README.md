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
