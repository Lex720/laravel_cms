<?php
namespace Codeception\Module;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use _cms\Sections\Sections;

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
            $url = \Str::slug($name);

            $sections->add(Sections::create([
                'name' => $name,
                'slug_url' => 'http://'.$url.'.com',
                'type' => $faker->randomElement(['HTML', 'CSS3', 'Bootstrap', 'PHP', 'Laravel']),
                'status' => rand(0, 1)
            ]));
        }

		return $sections;
	}

	public function haveSection()
	{
		return $this->getModule('Laravel4')->haveRecord('sections', [
			'id' => 1,
			'name' => 'MielCanela, C.A',
            'slug_url'  => 'http://mielcanela.com.ve',
            'type'   =>  'HTML5, CSS3, Bootstrap, Jquery',
            'status'   => 1
		]);
	}

}
