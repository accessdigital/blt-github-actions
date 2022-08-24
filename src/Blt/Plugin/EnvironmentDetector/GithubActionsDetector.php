<?php

namespace Acquia\GithubActions\Blt\Plugin\EnvironmentDetector;

use Acquia\Blt\Robo\Common\EnvironmentDetector;

class GithubActionsDetector extends EnvironmentDetector {
    public static function getCiEnv() {
        return isset($_ENV['CI']) ? 'GITHUB_ACTIONS' : FALSE;
    }

    public static function getCiSettingsFile(): string {
        return sprintf('%s/vendor/accessdigital/blt-github-actions/settings/github.settings.php', dirname(DRUPAL_ROOT));
    }
}
