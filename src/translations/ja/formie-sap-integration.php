<?php
/**
 * Formie SAP Integration translation file (Japanese)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'SAP Cloud CRM の統合を管理します。',

    // Permissions
    'Manage settings' => '設定を管理する',

    // Common
    '- None -' => '- なし -',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} は環境変数 ($VAR) またはエイリアス (@name) を参照する必要があります — リテラル値は許可されていません。',
    'Unable to obtain access token.' => 'アクセストークンを取得できませんでした。',
    'Connection test failed with status code: {code}' => '接続テストがステータスコード {code} で失敗しました。',

    // Settings: General
    'API testing and troubleshooting' => 'API テストとトラブルシューティング',
    'Documentation' => 'ドキュメント',
    'Environment variable examples' => '環境変数の例',
    'For setup instructions and API testing, see:' => 'セットアップ手順と API テストについては、こちらを参照してください:',
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'General Settings' => '一般設定',
    'Integration Information' => '統合情報',
    'Integration Location' => '統合の場所',
    'Plugin Name' => 'プラグイン名',
    'SAP Integration Status' => 'SAP 統合ステータス',
    'The name of the plugin as it appears in the Control Panel menu' => 'コントロールパネルのメニューに表示されるプラグインの名前',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => '`config/formie-sap-integration.php` ファイルの `pluginName` 設定によってオーバーライドされています。',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'このプラグインは Formie フォームに SAP Cloud CRM 統合を提供します。各フォームの Integrations タブで統合設定を行ってください。',

    // Integration: Setup guide
    'Choose between staging or production' => 'ステージングまたはプロダクションを選択してください',
    'Click on the {refresh} button in the right-hand sidebar.' => '右側のサイドバーにある {refresh} ボタンをクリックしてください。',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'SAP の管理者に連絡して、OAuth の認証情報を取得してください。',
    'Save this integration.' => 'このインテグレーションを保存してください。',
    'Step 1. Configure SAP Integration' => 'ステップ 1. SAP インテグレーションを設定する',
    'Step 2. Test Connection' => 'ステップ 2. 接続をテストする',
    'The specific endpoint for form submissions (e.g., {path})' => 'フォーム送信用の特定のエンドポイント (例: {path})',
    'You\'ll need:' => '以下が必要です:',
    'Your OAuth application client ID' => 'OAuth アプリケーションのクライアント ID',
    'Your OAuth application client secret' => 'OAuth アプリケーションのクライアントシークレット',

    // Integration: Plugin settings
    'API Endpoint' => 'API エンドポイント',
    'Client ID' => 'クライアント ID',
    'Client Secret' => 'クライアントシークレット',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'カスタム OAuth リダイレクト URI が必要な場合は入力してください。空のままにすると Craft のデフォルトが使用されます。',
    'Enter the OAuth scopes required, comma-separated.' => '必要な OAuth スコープをカンマ区切りで入力してください。',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'SAP API エンドポイントのパスを入力してください (例: /customer-feedback)。',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'SAP OAuth 認証 URL を入力してください (例: https://api.sap.com/oauth/authorize)。',
    'Enter the SAP OAuth Client ID.' => 'SAP OAuth クライアント ID を入力してください。',
    'Enter the SAP OAuth Client Secret.' => 'SAP OAuth クライアントシークレットを入力してください。',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'SAP OAuth トークン URL を入力してください (例: https://api.sap.com/oauth/token)。',
    'Enter the SAP environment to connect to (staging or production).' => '接続する SAP 環境を入力してください (staging または production)。',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => '本番 API のベース URL を入力してください (例: https://production-api.sap.com/v1)。',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'ステージング API のベース URL を入力してください (例: https://staging-api.sap.com/v1)。',
    'Environment' => '環境',
    'OAuth Authorization URL' => 'OAuth 認証 URL',
    'OAuth Redirect URI' => 'OAuth リダイレクト URI',
    'OAuth Scope' => 'OAuth スコープ',
    'OAuth Token URL' => 'OAuth トークン URL',
    'Production API URL' => '本番 API URL',
    'Staging API URL' => 'ステージング API URL',

    // Integration: Form settings
    'Additional Information' => '追加情報',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'すべてのフォームフィールドはペイロードのフィールド配列に自動的に含まれます。上記のマッピングはヘッダーに表示されるフィールドにのみ影響します。',
    'Header Field Mapping' => 'ヘッダーフィールドのマッピング',
    'Invoice ID Field' => '請求書 ID フィールド',
    'Member Email Field' => 'メンバーメールフィールド',
    'Member ID Field' => 'メンバー ID フィールド',
    'Member Mobile Field' => 'メンバー携帯電話フィールド',
    'Select the field that contains the email address.' => 'メールアドレスを含むフィールドを選択してください。',
    'Select the field that contains the invoice ID.' => '請求書 ID を含むフィールドを選択してください。',
    'Select the field that contains the member ID.' => 'メンバー ID を含むフィールドを選択してください。',
    'Select the field that contains the mobile number.' => '携帯電話番号を含むフィールドを選択してください。',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'SAP ペイロードのヘッダーフィールド (memberID, memberMobile, memberEmail, invoiceID) にマッピングするフォームフィールドを選択してください。',
];
