# Changelog

## [3.6.1](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.6.0...v3.6.1) (2026-06-20)


### Fixed

* **i18n:** correct translations across multiple locales ([2130cf6](https://github.com/LindemannRock/craft-formie-sap-integration/commit/2130cf69ae35a84736cc8998c97c9ebbefaa233d))

## [3.6.0](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.5.0...v3.6.0) - 2026-06-07


### Added

* add static analysis script for CI workflow ([ab0e1ae](https://github.com/LindemannRock/craft-formie-sap-integration/commit/ab0e1aeec288433d5f2d7e99df2f104733e6e900))
* **settings:** add settings post error handling in setAttributes method ([4e7a25f](https://github.com/LindemannRock/craft-formie-sap-integration/commit/4e7a25f456d949d394f06a7a2df616ddd726e782))


### Fixed

* correct connection test error message formatting ([ff61758](https://github.com/LindemannRock/craft-formie-sap-integration/commit/ff61758b48c6362abd631182afeae9b610cdec1f))
* **i18n:** correct connection test error message punctuation in translations ([0a57911](https://github.com/LindemannRock/craft-formie-sap-integration/commit/0a57911a7e6c06cf2f2ea2350ab0981c55934117))
* **i18n:** correct punctuation in Japanese translation strings ([b8aa085](https://github.com/LindemannRock/craft-formie-sap-integration/commit/b8aa0854131586058d440b1e304d62a9e484b00e))

## [3.5.0](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.4.0...v3.5.0) - 2026-05-22


### Added

* **ci:** add pre-commit hook for ECS and PHPStan checks ([d6e4bfd](https://github.com/LindemannRock/craft-formie-sap-integration/commit/d6e4bfd844d1935f0e2dbad42109617d64f46bdf))
* **i18n:** add translation issue template for reporting language problems ([93ecfcd](https://github.com/LindemannRock/craft-formie-sap-integration/commit/93ecfcd10df841a36b602d3be79b079bd6af9179))
* **tests:** add integration tests for URL validation and parsing ([1bc9c9d](https://github.com/LindemannRock/craft-formie-sap-integration/commit/1bc9c9d46d71d90b3c4a9396abf20d7f80321701))

## [3.4.0](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.3.0...v3.4.0) - 2026-05-06


### Features

* add issue templates for bug reports, feature requests, and questions ([3a030fe](https://github.com/LindemannRock/craft-formie-sap-integration/commit/3a030fe9e8908caa93c2571cddde1545ffb511f5))
* **cp:** add installation experience guidance for SAP integration ([bd6d6e7](https://github.com/LindemannRock/craft-formie-sap-integration/commit/bd6d6e7d4fd54cdd6ef881a44021e5ebb1557632))
* **crm:** enhance SAP integration configuration instructions ([923b733](https://github.com/LindemannRock/craft-formie-sap-integration/commit/923b7339caa94e4c5fdeb11d69ebc2efc25833af))
* **crm:** enhance URL validation for SAP integration ([822eb02](https://github.com/LindemannRock/craft-formie-sap-integration/commit/822eb02c52ba23c579eaba28168829bfc1f68a50))
* **crm:** implement SAP integration settings and URL validation ([0b7a123](https://github.com/LindemannRock/craft-formie-sap-integration/commit/0b7a1233dd538df1acb3e1338a748f78be2f7079))
* **translations:** add Italian, Japanese, Dutch, Norwegian, Portuguese, and Swedish translations for SAP integration ([87d8db6](https://github.com/LindemannRock/craft-formie-sap-integration/commit/87d8db6d40ca5d72f461f07755f5f3be39bf3415))
* **translations:** add new strings for SAP integration guidance and settings management ([8b5bda8](https://github.com/LindemannRock/craft-formie-sap-integration/commit/8b5bda8123849a0b236b0cb48081807da7f75a2a))
* **translations:** add setup guide translations for multiple languages ([50e2f92](https://github.com/LindemannRock/craft-formie-sap-integration/commit/50e2f926330c4ed41517eecc5d7b1f07ec175a27))


### Bug Fixes

* **crm:** update translation keys for SAP integration messages ([9d46442](https://github.com/LindemannRock/craft-formie-sap-integration/commit/9d46442ca46da6529f49e7820a035d2764a10258))
* **crm:** update translation keys for SAP integration settings and fields ([781b1ce](https://github.com/LindemannRock/craft-formie-sap-integration/commit/781b1ce369d758d39870745edb81834622344b05))
* drop PAT requirement for release-please — use built-in GITHUB_TOKEN ([dd7322e](https://github.com/LindemannRock/craft-formie-sap-integration/commit/dd7322e6ca25996e7e0c81446aee162c0ffb81bc))
* **Url:** correct version number in class documentation ([32f82a1](https://github.com/LindemannRock/craft-formie-sap-integration/commit/32f82a1355f85f2389e74b96b4e001ade1a190c5))

## [3.3.0](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.2.1...v3.3.0) - 2026-04-02


### Features

* **icon:** replace existing icon with new SVG design ([281e532](https://github.com/LindemannRock/craft-formie-sap-integration/commit/281e5328f51afd8032c6820ba1b6f313f493ae2e))

## [3.2.1](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.2.0...v3.2.1) - 2026-03-04


### Bug Fixes

* **settings:** add validation for plugin name in settings model ([db220dc](https://github.com/LindemannRock/craft-formie-sap-integration/commit/db220dcf5e9e3e27d2112eecc7cea0d5080324a8))


### Miscellaneous Chores

* add .gitattributes with export-ignore for Packagist distribution ([8d35fbb](https://github.com/LindemannRock/craft-formie-sap-integration/commit/8d35fbbeb3db26d06ada9f61117d25b1405108c9))
* switch to Craft License for commercial release ([0521f15](https://github.com/LindemannRock/craft-formie-sap-integration/commit/0521f15d8e0286cc80709d9154dc84d649c074d8))

## [3.2.0](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.1.0...v3.2.0) - 2026-01-11


### Features

* bootstrap base plugin helper in FormieSapIntegration ([b671b8d](https://github.com/LindemannRock/craft-formie-sap-integration/commit/b671b8d9b26e47b70027d247c24d67285307b63c))


### Bug Fixes

* update Settings model to include traits and improve plugin handle method ([bfdc5f6](https://github.com/LindemannRock/craft-formie-sap-integration/commit/bfdc5f6c0ccecd89260a8ef7f39a466f78185efd))


### Miscellaneous Chores

* update composer.json for improved development dependencies ([b605fbd](https://github.com/LindemannRock/craft-formie-sap-integration/commit/b605fbdb8b41c37ed6036f6975579ad8477b87ca))

## [3.1.0](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.0.3...v3.1.0) - 2025-12-04


### Features

* add PHPStan and EasyCodingStandard configurations for improved code quality ([51d02f1](https://github.com/LindemannRock/craft-formie-sap-integration/commit/51d02f1096c22c02880af837c4b12a25a8814592))


### Bug Fixes

* replace App::parseEnv with App::env for environment variable retrieval in Sap class ([fcf2919](https://github.com/LindemannRock/craft-formie-sap-integration/commit/fcf291953470a4a54df6cf467c88776e90b864bc))
* update docblocks for clarity and consistency in FormieSapIntegration class ([d741a64](https://github.com/LindemannRock/craft-formie-sap-integration/commit/d741a648c6abdebdd7bdfbe09b6610fc49497783))
* update error handling in Sap class and refactor plugin property initialization ([ff67bc2](https://github.com/LindemannRock/craft-formie-sap-integration/commit/ff67bc2b41490cce861b52a8eefbd96e592ea070))

## [3.0.3](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.0.2...v3.0.3) - 2025-11-01


### Bug Fixes

* update validation method names for consistency and improve formatting in settings ([63f2a27](https://github.com/LindemannRock/craft-formie-sap-integration/commit/63f2a27f50f2fd3c3c8848b8193f0db9be47dd12))

## [3.0.2](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.0.1...v3.0.2) - 2025-10-27


### Miscellaneous Chores

* update .gitignore ([388024d](https://github.com/LindemannRock/craft-formie-sap-integration/commit/388024da25d5fc684c924a52b1fb70431b70aa06))

## [3.0.1](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v3.0.0...v3.0.1) - 2025-10-20


### Miscellaneous Chores

* update README with additional badges ([2d8b995](https://github.com/LindemannRock/craft-formie-sap-integration/commit/2d8b995cdd3b105587b45a205aa58bd927ac9872))

## [3.0.0](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v1.0.4...v3.0.0) - 2025-10-20


### Miscellaneous Chores

* bump version scheme to match Formie 3 ([1dd01cd](https://github.com/LindemannRock/craft-formie-sap-integration/commit/1dd01cd3750126d9ca5ad37dc81a0ccb3df24f00))

## [1.0.4](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v1.0.3...v1.0.4) - 2025-10-16


### Bug Fixes

* update installation instructions for Composer and DDEV ([d591942](https://github.com/LindemannRock/craft-formie-sap-integration/commit/d591942642f8d6161efd8b228aa7704feea58819))

## [1.0.3](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v1.0.2...v1.0.3) - 2025-10-16


### Bug Fixes

* change license from proprietary to MIT in composer.json ([4223edd](https://github.com/LindemannRock/craft-formie-sap-integration/commit/4223edd75ca9ee4ec7c383e5bce25cefcfe08d4f))

## [1.0.2](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v1.0.1...v1.0.2) - 2025-10-16


### Bug Fixes

* update author details and add RSS feed to support section in composer.json ([7bd906b](https://github.com/LindemannRock/craft-formie-sap-integration/commit/7bd906b17844e25e30761a1a58090f4e95680c6c))

## [1.0.1](https://github.com/LindemannRock/craft-formie-sap-integration/compare/v1.0.0...v1.0.1) - 2025-09-24


### Bug Fixes

* update repository references and improve .gitignore entries ([035f89d](https://github.com/LindemannRock/craft-formie-sap-integration/commit/035f89dfab0c090db24336713609e710fa241854))

## 1.0.0 - 2025-09-15


### Features

* initial Formie SAP Integration plugin implementation ([6a80ea2](https://github.com/LindemannRock/formie-sap-integration/commit/6a80ea20abbb7fcd63a214c434b4703aea5d04f6))
