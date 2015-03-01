<?php

class SectionsController extends \BaseController {

	protected $rules = array (
		'name' => 'required',
		'slug_url' => 'required',
		'type' => 'required|in:page,blog',
		'menu' => 'required|in:1,0',
		'menu_order' => 'required|integer',
		'published' => 'required|in:1,0'
		);

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$sections = Sections::search(Input::all());

		$q = Sections::select();

		if (Input::has('search_name'))
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

		return View::make('sections/list', compact('sections'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sections/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		$validator = Validator::make($data, $this->rules);

		if ($validator->passes()) {

			$sections = Sections::create($data);
    		return Redirect::route('sections.show', $sections->id);
		}
		else {

			return Redirect::back()->withInput()->withErrors($validator->messages());
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sections = Sections::findOrFail($id);

    	return View::make('sections/show')->with('sections', $sections);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sections = Sections::findOrFail($id);

		return View::make('sections/edit')->with('sections', $sections);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sections = Sections::findOrFail($id);

		$data = Input::all();

		$validator = Validator::make($data, $this->rules);

		if ($validator->passes()) {

			$sections->fill($data);
			$sections->save();
			return Redirect::route('sections.show', $sections->id);
		}
		else {

			return Redirect::back()->withInput()->withErrors($validator->messages());
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sections = Sections::findOrFail($id);
		$sections->delete();

		return Redirect::route('sections.index');
	}


}
