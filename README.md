**Metronics Theme Plugins**
===================

metronics-theme-loader
--------------
- Metronics theme version : v4.7.5 (you must buy the licence to use this plugins)

- This plugins use PhalconPHP Framework, please adjust model and query according to your framework.

- Apcu for caching

How to Use:

1. upload mysql/sys_js_css_helper.sql to your database

2. Adjust database settings in app/config/config.js 

3. Copy assets folder from metronics to public/assets (contains apps, global, layouts and pages directory)

4. In your controller add initialize() method and call JsCssHelper 

```code
$this->JsCssHelper->source(['header','footer','plugin_1','plugin_2','plugin_2','plugin_etc']);
```
usage
```php
<?php

class IndexController extends ControllerBase
{
    public function initialize() {
        /**
         * Call for metronics plugins
         * 'header' and 'footer' is a must plugin 
         * 'components_select2' is the plugin name according to metronics .html file
        */
        $this->JsCssHelper->source(['header','footer','components_select2']);
    }

    public function indexAction()
    {
        
    }

}
```

5. In your view add
```code

{# before <body> tag #}
{{assets.outputCss()}} 

{# before </body> tag #}
{{assets.outputJs()}}
```

*Develop by Adzanny Rivaldo Amri (adzanny@hendevane.co.id)*
