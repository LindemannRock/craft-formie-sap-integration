<?php
/**
 * Formie SAP Integration plugin for Craft CMS 5.x
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

namespace lindemannrock\formiesapintegration\models;

use craft\base\Model;
use lindemannrock\base\traits\PluginNameSettingsTrait;
use lindemannrock\base\traits\SettingsConfigTrait;
use lindemannrock\base\traits\SettingsDisplayNameTrait;

/**
 * Formie SAP Integration Settings Model
 *
 * @author    LindemannRock
 * @package   FormieSapIntegration
 * @since     1.0.0
 */
class Settings extends Model
{
    use PluginNameSettingsTrait;
    use SettingsConfigTrait;
    use SettingsDisplayNameTrait;
    /**
     * @var string The name of the plugin as it appears in the Control Panel menu
     */
    public string $pluginName = 'Formie SAP Integration';

    /**
     * @inheritdoc
     */
    public function defineRules(): array
    {
        return $this->pluginNameSettingsRules();
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels(): array
    {
        return $this->pluginNameSettingsLabel();
    }

    /**
     * Plugin handle for config file resolution
     */
    protected static function pluginHandle(): string
    {
        return 'formie-sap-integration';
    }
}
