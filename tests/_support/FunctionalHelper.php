<?php
namespace Codeception\Module;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use Sections;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{

	public function haveSections($num = 10)
	{
		$faker = Faker::create();

		$sections = new Collection();

		for ($i = 0; $i < $num; $i++)
		{
			$name = $faker->unique()->sentence(2);

			$sections->add(Sections::create([
				'name' => $name,
				'slug_url' => \Str::slug($name),
				'type' => $faker->randomElement(['page', 'blog']),
				'menu' => rand(1, 10),
				'menu_order' => rand(0, 1),
				'published' => rand(0, 1)
			]));
		}

		return $sections;
	}

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
