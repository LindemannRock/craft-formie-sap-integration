<?php
/**
 * Formie SAP Integration plugin for Craft CMS 5.x
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

namespace lindemannrock\formiesapintegration\models;

use Craft;
use craft\base\Model;

/**
 * Formie SAP Integration Settings Model
 *
 * @author    LindemannRock
 * @package   FormieSapIntegration
 * @since     1.0.0
 */
class Settings extends Model
{
    /**
     * @var string|null The public-facing name of the plugin
     */
    public ?string $pluginName = 'Formie SAP Integration';

    /**
     * @inheritdoc
     */
    public function defineRules(): array
    {
        return [
            [['pluginName'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels(): array
    {
        return [
            'pluginName' => Craft::t('formie-sap-integration', 'Plugin Name'),
        ];
    }

    /**
     * Check if a setting is overridden in config file
     *
     * @param string $setting
     * @return bool
     */
    public function isOverridden(string $setting): bool
    {
        $configFileSettings = Craft::$app->getConfig()->getConfigFromFile('formie-sap-integration');
        return isset($configFileSettings[$setting]);
    }
}