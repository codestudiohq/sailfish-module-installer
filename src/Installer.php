<?php

/**
 * Part of the SailFish Module Installer Package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under MIT License.
 *
 * This source file is subject to MIT License which is
 * bundled with this package in the license.md file.
 *
 * @version    1.0.0
 * @author     Roshan Gautam
 * @license    MIT
 * @copyright  (c) 2017, Roshan Gautam
 * @link       http://roshangautam.com
 */

namespace SailFish\ModuleInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    /**
     * {@inheritdoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'app/Modules/'.$package->getPrettyName();
    }

    /**
     * {@inheritdoc}
     */
    public function supports($packageType)
    {
        return 'sailFish-module' === $packageType;
    }
}
