<?php
/**
 * cachebust plugin for Craft CMS 3.x
 *
 * Support cachebusting in twig.
 *
 * @link      https://github.com/bhuvidya
 * @copyright Copyright (c) 2019 bhu Boue vidya
 */

namespace bhuvidya\cachebust\twigextensions;

use bhuvidya\cachebust\Cachebust;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    bhu Boue vidya
 * @package   Cachebust
 * @since     1.0.0
 */
class CachebustTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Cachebust';
    }

    /**
     * Returns an array of global variables.
     *
     * @return array An array of global variables.
     */

    public function getGlobals()
    {
        return [ 'pooname' => 'bhupoo' ];
        throw \Exception('shit');
        $data = Cachebust::getInstance()->cacheBustConfig->getCacheBustData();

        $globals['cacheBust'] = $data ?: [];

        return $globals;
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            // new \Twig_SimpleFilter('someFilter', [$this, 'someInternalFunction']),
        ];
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
    * @return array
     */
    public function getFunctions()
    {
        return [
            // new \Twig_SimpleFunction('someFunction', [$this, 'someInternalFunction']),
        ];
    }
}
