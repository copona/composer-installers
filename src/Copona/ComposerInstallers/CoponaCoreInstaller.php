<?php

namespace Copona\ComposerInstallers;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class CoponaCoreInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'core/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'copona-core' === $packageType;
    }
}