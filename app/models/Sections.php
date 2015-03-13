<?php

class Sections extends Eloquent {

	protected $fillable = ['name', 'slug_url', 'type', 'menu', 'menu_order', 'published'];
	public static $filters = ['search_name', 'search_published', 'search_menu'];

	const PAGINATE = true;

	public static function search($data, $paginate = false)
	{
		$data = array_only($data, static::$filters); //define los filtros que se permiten
		$data = array_filter($data, 'strlen'); //verifica si el valor del campo es 0 o null

		$q = Sections::select();

		if ( isset ($data['search_name']) )
		{
			$search = Input::get('search_name');
			$q->where('name', 'LIKE', "%$search%");
		}

		if ( isset ($data['search_published']) )
		{
			$q->where('published', Input::get('search_published'));
		}

		if ( isset ($data['search_menu']) )
		{
			$q->where('menu', Input::get('search_menu'));
		}

		return $paginate ? $q->paginate() : $q->get();
	}

}