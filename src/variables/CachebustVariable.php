<?php
/**
 * cachebust plugin for Craft CMS 3.x
 *
 * Support cachebusting in twig.
 *
 * @link      https://github.com/bhuvidya
 * @copyright Copyright (c) 2019 bhu Boue vidya
 */

namespace bhuvidya\cachebust\variables;

use bhuvidya\cachebust\Cachebust;

use Craft;

/**
 * cacheBust Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.cachebust }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    bhu Boue vidya
 * @package   Cachebust
 * @since     1.0.0
 */
class CachebustVariable
{
    public function data()
    {
        return print_r(Cachebust::getInstance()->cacheBustConfig->getCacheBustData(), true);
    }

    public function js($tag)
    {
        return Cachebust::getInstance()->cacheBustConfig->getJS($tag);
    }

    public function css($tag)
    {
        return Cachebust::getInstance()->cacheBustConfig->getCSS($tag);
    }

    public function img($tag)
    {
        return Cachebust::getInstance()->cacheBustConfig->getImg($tag);
    }

    public function entry($category, $tag)
    {
        return Cachebust::getInstance()->cacheBustConfig->getEntry($category, $tag);
    }
}
