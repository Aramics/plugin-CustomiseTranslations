<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\CustomiseTranslations;

class CustomiseTranslations extends \Piwik\Plugin
{
    public function registerEvents() {
        return array(
            'AssetManager.getStylesheetFiles' => 'getStylesheetFiles',
        );
    }

    public function getStylesheetFiles(&$files) {
        $files[] = "plugins/CustomiseTranslations/stylesheets/styles.less";
    }
}
