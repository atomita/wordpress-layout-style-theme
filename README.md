Wordpress Layout Style Theme
=====================

This is intended to be able to use the "layout" in the file of the theme of wordpress.  

Need to call the "get_header" function or the like in the "template of content (single.php, index.php, etc.)" will be lost when you use this.  
"template of content" you can focus on content for it. 

## Get started

Install the "atomita/wordpress-layout-style-theme" using the composer.  

Copy to the "wp-content/themes/{theme-name}/layout/default.php" from "src/atomita/wordpress/LayoutStyleTheme/default.php".  
And be customized.  

Describe the following at the "functions.php".  

**PHP 5.3 or more**
```php
require {composer install dir} . "/vendor/autoload.php";
use \atomita\wordpress\LayoutStyleThemeFacade as LayoutStyleTheme;
LayoutStyleTheme::initialize();
```

**Less than PHP 5.3**
```php
require {composer install dir} . "/vendor/autoload.php";
atomita_wordpress_LayoutStyleThemeFacade::initialize();
```


## LICENSE

This is released under the LGPLv3, see LICENSE.  
  


Copyright (c) 2014 atomita
