<?php
/**
 * Easy Forms plugin for Craft CMS 3.x
 *
 * A plugin to add easy forms to your craft website.
 *
 * @link      https://github.com/sam38/easyforms.git
 * @copyright Copyright (c) 2018 Sudarshan Shakya
 */

namespace easyforms\easyforms\variables;

use easyforms\easyforms\EasyForms;

use Craft;

/**
 * Easy Forms Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.easyForms }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Sudarshan Shakya
 * @package   EasyForms
 * @since     1.0.0
 */
class EasyFormsVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.easyForms.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.easyForms.exampleVariable(twigValue) }}
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
