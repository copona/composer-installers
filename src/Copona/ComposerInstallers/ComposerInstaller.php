<?php

namespace Copona\ComposerInstallers;

class ComposerInstaller extends BaseInstaller
{
    protected $locations = array(
        'core'      => 'core/',
        'extension' => 'extensions/{$vendor}/{$name}/',
        'theme'     => 'themes/{$name}/'
    );

    /**
     * Format package name.
     *
     * For package type copona-extension, cut off a trailing '-extension' if present.
     *
     * For package type copona-theme, cut off a trailing '-theme' if present.
     *
     */
    public function inflectPackageVars($vars)
    {
        if ($vars['type'] === 'copona-extension') {
            return $this->inflectExtensionVars($vars);
        }
        if ($vars['type'] === 'copona-theme') {
            return $this->inflectThemeVars($vars);
        }

        return $vars;
    }

    protected function inflectExtensionVars($vars)
    {
        $vars['name'] = preg_replace('/-extension$/', '', $vars['name']);

        return $vars;
    }

    protected function inflectThemeVars($vars)
    {
        $vars['name'] = preg_replace('/-theme$/', '', $vars['name']);

        return $vars;
    }
}