<?php namespace _cms\Sections;

use _cms\Base\BaseRepo;

class SectionsRepo extends BaseRepo {

	public function getModel() 
	{
		return new Sections;
	}

}