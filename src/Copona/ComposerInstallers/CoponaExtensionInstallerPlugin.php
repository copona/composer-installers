<?php

namespace Copona\ComposerInstallers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class CoponaExtensionInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new CoponaExtensionInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}