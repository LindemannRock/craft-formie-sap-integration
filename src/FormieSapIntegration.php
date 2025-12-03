<?php
/**
 * Formie SAP Integration plugin for Craft CMS 5.x
 *
 * SAP Cloud integration for Formie - Automatically sends form submissions to SAP Cloud Platform
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

namespace lindemannrock\formiesapintegration;

use Craft;
use craft\base\Model;
use craft\base\Plugin;
use craft\events\RegisterTemplateRootsEvent;
use craft\web\View;
use lindemannrock\formiesapintegration\integrations\crm\Sap;
use lindemannrock\formiesapintegration\models\Settings;
use verbb\formie\events\RegisterIntegrationsEvent;
use verbb\formie\services\Integrations;
use yii\base\Event;

/**
 * Formie SAP Integration Plugin
 *
 * @author    LindemannRock
 * @package   FormieSapIntegration
 * @since     1.0.0
 *
 * @property-read Settings $settings
 * @method Settings getSettings()
 */
class FormieSapIntegration extends Plugin
{
    /**
     * @var FormieSapIntegration|null Singleton plugin instance
     */
    public static ?FormieSapIntegration $plugin = null;

    /**
     * @var string Plugin schema version for migrations
     */
    public string $schemaVersion = '1.0.0';

    /**
     * @var bool Whether the plugin exposes a control panel settings page
     */
    public bool $hasCpSettings = true;

    /**
     * @inheritdoc
     */
    public function init(): void
    {
        parent::init();
        self::$plugin = $this;

        // Set the alias for this plugin
        Craft::setAlias('@lindemannrock/formiesapintegration', __DIR__);
        Craft::setAlias('@formie-sap-integration', __DIR__);
        
        // Create class alias for backward compatibility with existing integrations
        class_alias(
            \lindemannrock\formiesapintegration\integrations\crm\Sap::class,
            'lindemannrock\modules\formiesapintegration\integrations\crm\Sap'
        );
        
        // Register template roots
        Event::on(
            View::class,
            View::EVENT_REGISTER_CP_TEMPLATE_ROOTS,
            function(RegisterTemplateRootsEvent $event) {
                $event->roots['formie-sap-integration'] = __DIR__ . '/templates';
            }
        );

        // Register the SAP integration with Formie
        Event::on(
            Integrations::class,
            Integrations::EVENT_REGISTER_INTEGRATIONS,
            function(RegisterIntegrationsEvent $event) {
                $event->crm[] = Sap::class;
            }
        );
        
        // Set the plugin name from settings
        $settings = $this->getSettings();
        if (!empty($settings->pluginName)) {
            $this->name = $settings->pluginName;
        }

        Craft::info(
            'Formie SAP Integration plugin loaded',
            __METHOD__
        );
    }
    
    /**
     * @inheritdoc
     */
    protected function createSettingsModel(): ?Model
    {
        return new Settings();
    }
    
    /**
     * @inheritdoc
     */
    protected function settingsHtml(): ?string
    {
        return Craft::$app->view->renderTemplate(
            'formie-sap-integration/settings',
            [
                'settings' => $this->getSettings(),
                'plugin' => $this,
            ]
        );
    }
}
