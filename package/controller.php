<?php
namespace Concrete\Package\FoundationPagination;

use Concrete\Core\Package\Package;
use Core;

class Controller extends Package
{
	protected $pkgHandle = 'foundation_pagination';
	protected $appVersionRequired = '5.7.5.4';
	protected $pkgVersion = '0.9.1';

	public function getPackageName()
	{
		return t("Foundation Pagination");
	}

	public function getPackageDescription()
	{
		return t("Pagination for Foundation 6");
	}

	public function on_start()
	{
		Core::bind('manager/view/pagination', function($app) {
			return new \Concrete\Package\FoundationPagination\Src\Search\Pagination\View\Manager($app);
		});
	}
}
