<?php namespace FPP\FPPInstaller;


use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
class BaseInstaller extends LibraryInstaller {
	/**
	 * Paths array.
	 *
	 * @var array
	 */
	protected $paths = [
		'base'   => '/../../../..',
		'public' => '/../../../../public',
	];
	/**
	 * Returns the path.
	 *
	 * @param  string  $path
	 * @return string
	 */
	protected function getPath($path)
	{
		$pathsFile = __DIR__.'/../../../../bootstrap/paths.php';
		if (file_exists($pathsFile))
		{
			$paths = require $pathsFile;
		}
		return isset($paths[$path]) ? $paths[$path] : __DIR__.$this->paths[$path];
	}
}