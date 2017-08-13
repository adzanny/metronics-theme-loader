<?php

/*
 * Description of JsCssHelper
 *  
 * @author Adzanny Rivaldo Amri
 * 
 */

use Phalcon\Mvc\User\Component;

class JsCssHelper extends Component {

    public function source($plugins) {

        $loadPlugins = function($module, $jscss) {
            //use apcu for caching, loaded from bootstrap DI
            $cache = $this->apc;

            if (!$cache->exists("JSCSS_{$module}_{$jscss}")) {

                $SysJsCss = SysJsCssHelper::find([
                            "module = :module: AND jscss = :jscss: and loaded = 1",
                            "bind" => [
                                "module" => "$module",
                                "jscss" => "$jscss"
                            ],
                            "columns" => "url",
                            "order" => "rank"
                ]);

                $return = [];

                foreach ($SysJsCss as $jc) {
                    $return[] = $jc->url;
                }

                $cache->save("JSCSS_{$module}_{$jscss}", $return);
            }

            return $cache->get("JSCSS_{$module}_{$jscss}");
        };

        $css = $js = $init = array();

        foreach ($plugins as $plugin) {

            $js = array_unique(array_merge($js, $loadPlugins($plugin, 'js')));
            $css = array_unique(array_merge($css, $loadPlugins($plugin, 'css')));
        }

        $this->getCSS($css);

        $this->getJS($js);

    }

    public function getCSS($css) {
        $ret = null;

        foreach ($css as $_css) {
            $this->assets->addCss($_css);
        }

        return $ret;
    }

    public function getJS($js) {
        $ret = null;
        foreach ($js as $_js) {
            $this->assets->addJs($_js);
        }

        return $ret;
    }

    public function append($items) {
        $ret = array();
        foreach ($items as $item) {
            $ret[] = $item;
        }
        return $ret;
    }

}

