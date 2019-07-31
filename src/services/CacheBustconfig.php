<?php
/**
 * cachebust plugin for Craft CMS 3.x
 *
 * Support cachebusting in twig.
 *
 * @link      https://github.com/bhuvidya
 * @copyright Copyright (c) 2019 bhu Boue vidya
 */

namespace bhuvidya\cachebust\services;

use bhuvidya\cachebust\Cachebust;

use Craft;
use craft\base\Component;
use stdClass;

/**
 * CacheBustConfig Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    bhu Boue vidya
 * @package   Cachebust
 * @since     1.0.0
 */
class CacheBustConfig extends Component
{
    private static $cachebust_data;


    public function getCacheBustData($which = null)
    {
        return $this->getData();
    }


    public function getJS($tag)
    {
        return $this->getEntry('js', $tag);
    }

    public function getCSS($tag)
    {
        return $this->getEntry('css', $tag);
    }

    public function getImg($tag)
    {
        return $this->getEntry('img', $tag);
    }

    public function getEntry($category, $tag)
    {
        if (!$data = $this->getData()) {
            return false;
        }
        if (!$data->{$category}) {
            return false;
        }

        foreach ($data->{$category} as $this_tag => $this_file) {
            if (strcasecmp($tag, $this_tag) === 0) {
                return $this_file;
            }
        }
        return false;
    }


    /**
     * get the scss/js/image cachebust info, squash it into one object, and return
     *
     * @return object
     */

    private function getData()
    {
        if (static::$cachebust_data) {
            return static::$cachebust_data;
        }

        $dir = Craft::$app->path->getSiteTemplatesPath();
        $data = new stdClass();

        $list = (object) [
            'css' => 'cachebust.css.json',
            'js' => 'cachebust.js.json',
            'img' => 'cachebust.img.json'
        ];

        foreach ($list as $type => $file) {
            if (!$info = (array) @json_decode(@file_get_contents($dir . '/' . $file))) {
                continue;
            }
            $data->{$type} = $info;
        }

        return static::$cachebust_data = $data;
    }

}
