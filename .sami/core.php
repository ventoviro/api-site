<?php
/**
 * Part of api-site project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Sami\Sami;
use Sami\RemoteRepository\GitHubRemoteRepository;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
	->files()
	->name('*.php')
	->exclude('Resources')
	->exclude('resources')
	->exclude('Test')
	->exclude('test')
	->exclude('build')
	->in($dir = __DIR__ . '/windwalker/core/src')
;

return new Sami($iterator, array(
	'theme'                => 'default',
	'title'                => 'Windwalker Core API',
	'build_dir'            => __DIR__.'/../core',
	'cache_dir'            => __DIR__.'/cache',
	'remote_repository'    => new GitHubRemoteRepository('ventoviro/windwalker-core', dirname($dir)),
	'default_opened_level' => 2,
));
