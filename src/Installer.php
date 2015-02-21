<?php namespace FPP\FPPInstaller;

use Composer\Package\PackageInterface;
class Installer extends BaseInstaller {
	/**
	 * {@inheritDoc}
	 */
	public function getPackageBasePath(PackageInterface $package)
	{
		$basePath = $this->getPath('base');
		return $basePath.'/plugins/'.$package->getPrettyName();
	}
	/**
	 * {@inheritDoc}
	 */
	public function supports($packageType)
	{
		return $packageType == 'fpp-plugin';
	}
}