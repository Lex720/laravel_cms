<?php

use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use _cms\Sections\Sections;

class SectionsTableSeederFaker extends Seeder {

    public function run()
    {
        $this->haveSections(50);
    }

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

}
