<?php

use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Collection;
use _cms\Sections\Sections;

class SectionsTableSeeder extends Seeder {

    public function run()
    {
        Sections::create([
            'name' => 'Our company',
            'slug_url'  => 'our-company',
            'menu'   => 1,
            'menu_order'      => '1',
            'type'   =>  'page',
            'published'   => 1
        ]);

        Sections::create([
            'name' => 'Services',
            'slug_url'  => 'services',
            'menu'   => 0,
            'menu_order'      => '2',
            'type'   =>  'blog',
            'published'   => 0
        ]);

        Sections::create([
            'name' => 'Contact Us',
            'slug_url'  => 'contact-us',
            'menu'   => 1,
            'menu_order'      => '3',
            'type'   =>  'page',
            'published'   => 1
        ]);
    }

}
