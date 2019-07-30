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
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Cachebust::$plugin->cacheBustConfig->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
