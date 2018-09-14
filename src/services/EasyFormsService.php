<?php
/**
 * Easy Forms plugin for Craft CMS 3.x
 *
 * A plugin to add easy forms to your craft website.
 *
 * @link      https://github.com/sam38/easyforms.git
 * @copyright Copyright (c) 2018 Sudarshan Shakya
 */

namespace easyforms\easyforms\services;

use easyforms\easyforms\EasyForms;

use Craft;
use craft\base\Component;

/**
 * EasyFormsService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Sudarshan Shakya
 * @package   EasyForms
 * @since     1.0.0
 */
class EasyFormsService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     EasyForms::$plugin->easyFormsService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (EasyForms::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
