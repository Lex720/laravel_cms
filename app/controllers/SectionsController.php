<?php

use _cms\Sections\SectionsRepoInterface;

class SectionsController extends \BaseController {

	protected $rules = array 
	(
		'name' => 'required',
		'slug_url' => 'required',
		'type' => 'required|in:page,blog',
		'menu' => 'required|in:1,0',
		'menu_order' => 'required|integer',
		'published' => 'required|in:1,0'
	);

	protected $sectionsRepo;

	public function __construct(SectionsRepoInterface $sectionsRepo)
	{
		$this->sectionsRepo = $sectionsRepo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Input::all();
		$paginate = true;

		$sections = $this->sectionsRepo->search($data, $paginate);

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

			$sections = $this->sectionsRepo->create($data);
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
		$sections = $this->sectionsRepo->findOrFail($id);
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
		$sections = $this->sectionsRepo->findOrFail($id);
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
		$sections = $this->sectionsRepo->findOrFail($id);

		$data = Input::all();

		$validator = Validator::make($data, $this->rules);

		if ($validator->passes()) {

			$this->sectionsRepo->update($sections, $data);
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
		$sections = $this->sectionsRepo->findOrFail($id);
		$this->sectionsRepo->delete($sections);

		return Redirect::route('sections.index');
	}


}
