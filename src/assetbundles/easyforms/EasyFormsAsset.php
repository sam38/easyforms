<?php
/**
 * Easy Forms plugin for Craft CMS 3.x
 *
 * A plugin to add easy forms to your craft website.
 *
 * @link      https://github.com/sam38/easyforms.git
 * @copyright Copyright (c) 2018 Sudarshan Shakya
 */

namespace easyforms\easyforms\assetbundles\EasyForms;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * EasyFormsAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Sudarshan Shakya
 * @package   EasyForms
 * @since     1.0.0
 */
class EasyFormsAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@easyforms/easyforms/assetbundles/easyforms/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/EasyForms.js',
        ];

        $this->css = [
            'css/EasyForms.css',
        ];

        parent::init();
    }
}
