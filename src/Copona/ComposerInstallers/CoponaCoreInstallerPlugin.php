<?php

namespace Copona\ComposerInstallers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class CoponaCoreInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new CoponaCoreInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}