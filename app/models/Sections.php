<?php

class Sections extends Eloquent {

	protected $fillable = ['name', 'slug_url', 'type', 'menu', 'menu_order', 'published'];

	/*public static function search(array $data = array())
	{
		$data = array_filter($data, 'strlen');

		$q = Sections::select();

		if ( ! isset ($data['name']))
		{
			$q->where('name', Input::get('search_name'));
		}

		if (Input::has('search_published'))
		{
			$q->where('published', Input::get('search_published'));
		}

		if (Input::has('search_menu'))
		{
			$q->where('menu', Input::get('search_menu'));
		}

		$sections = $q->get();
	}*/

}