<?php
namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{

	public function haveSection()
	{
		return $this->getModule('Laravel4')->haveRecord('sections', [
			'id' => 1,
			'name' => 'Our company',
			'slug_url' => 'our-company',
			'type' => 'page',
			'menu' => 1,
			'menu_order' => 2,
			'published' => 0
		]);
	}

}
