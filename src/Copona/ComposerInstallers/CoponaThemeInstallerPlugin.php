<?php

namespace Copona\ComposerInstallers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class CoponaThemeInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new CoponaThemeInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}