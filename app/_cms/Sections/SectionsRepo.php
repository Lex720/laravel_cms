<?php namespace _cms\Sections;

use _cms\Base\BaseRepo;

class SectionsRepo extends BaseRepo implements SectionsRepoInterface {

	public function getModel() 
	{
		return new Sections;
	}

}