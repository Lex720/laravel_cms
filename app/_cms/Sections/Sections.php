<?php namespace _cms\Sections;

use _cms\Base\BaseEntity;

class Sections extends BaseEntity {

	protected $fillable = ['name', 'slug_url', 'type', 'menu', 'menu_order', 'published'];	

}