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
 * cachebust Variable
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
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.cachebust.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.cachebust.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
