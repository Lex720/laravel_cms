<?php namespace _cms\Base;

abstract class BaseRepo {

	public $filters = ['name', 'status'];

	abstract public function getModel();

	public function find($id)
	{
		return $this->getModel()->findOrFail($id);
	}

	public function create(array $data)
	{
		return $this->getModel()->create($data);
	}

	public function update(BaseEntity $entity, array $data)
	{
		$entity->fill($data);
		$entity->save();
		return $entity;
	}

	public function delete($entity)
	{
		$entity->delete();
		return $entity;
	}

	public function listSections($paginate)
	{
		$q = $this->getModel()->select();

		return $paginate ? 
		$q->paginate()
		: $q->get();
	}

	public function search(array $data, $paginate)
	{
		$data = array_only($data, $this->filters); //define los filtros que se permiten
		$data = array_filter($data, 'strlen'); //verifica si el valor del campo es 0 o null

		$q = $this->getModel()->select();

		if ( isset ($data['name']) )
		{
			$search = $data['name'];
			$q->where('name', 'LIKE', "%$search%");
		}

		if ( isset ($data['status']) )
		{
			$q->where('status', $data['status']);
		}

		return $paginate ? 
		$q->paginate()->appends($data)
		: $q->get();
	}

}