<?php

use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Collection;
use _cms\Sections\Sections;

class SectionsTableSeeder extends Seeder {

    public function run()
    {
        Sections::create([
            'name' => 'MielCanela, C.A',
            'slug_url'  => 'http://mielcanela.com.ve',
            'type'   =>  'HTML5, CSS3, Bootstrap, Jquery',
            'status'   => 1
        ]);

        Sections::create([
            'name' => 'Grupo Guerra Gonzalez, C.A',
            'slug_url'  => 'http://visiopro.com.ve/site/g3/index.php',
            'type'   =>  'HTML5, CSS3, Bootstrap, Jquery',
            'status'   => 0
        ]);

        Sections::create([
            'name' => 'Centro Virgen del Valle',
            'slug_url'  => 'http://visiopro.com.ve/site/cvdv',
            'type'   =>  'HTML5, CSS3',
            'status'   => 0
        ]);

        Sections::create([
            'name' => 'DISPAMENCA',
            'slug_url'  => 'http://visiopro.com.ve/site/dispamenca',
            'type'   =>  'PHP, HTML5, CSS3, Flash',
            'status'   => 0
        ]);

        Sections::create([
            'name' => 'Manual Google Apps EOCA',
            'slug_url'  => 'http://visiopro.com.ve/site/eoca',
            'type'   =>  'HTML5, CSS3, Flash',
            'status'   => 0
        ]);
    }

}
