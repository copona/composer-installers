<?php

namespace Copona\ComposerInstallers;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class CoponaExtensionInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $parts = explode($package->getPrettyName());
        $vendor = $parts[0];
        unset($parts[0]);
        $name = implode('-', $parts);

        return 'extensions/' . $vendor . '/' . $name . '/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'copona-extension' === $packageType;
    }
}