Wordpress Layout Style Theme
=====================

This is intended to be able to use the "layout" in the file of the theme of wordpress.  

Need to call the "get_header" function or the like in the "template of content (single.php, index.php, etc.)" will be lost when you use this.  
"template of content" you can focus on content for it. 

## Get started

Install the "atomita/wp-layout-style-theme" using the composer.  

Copy the "wp-content/themes/{theme-name}/layout/default.php" to "src/Atomita/Wordpress/LayoutStyleTheme/default.php".  
And be customized.  

Describe the following at the "functions.php".  

**PHP 5.3 or more**
```php
require {composer install dir} . "/vendor/autoload.php";
use Atomita\Wordpress\LayoutStyleThemeFacade as LayoutStyleTheme;
LayoutStyleTheme::initialize();
```

**Less than PHP 5.3**
```php
require {composer install dir} . "/vendor/autoload.php";
Atomita_Wordpress_LayoutStyleThemeFacade::initialize();
```


## LICENSE

This is released under the LGPLv3, see LICENSE.  
  


Copyright (c) 2013 atomita
