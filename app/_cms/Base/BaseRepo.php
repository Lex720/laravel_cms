<?php namespace _cms\Base;

abstract class BaseRepo {

	public $filters = ['name', 'published', 'menu'];

	abstract public function getModel();

	public function findOrFail($id)
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

		if ( isset ($data['published']) )
		{
			$q->where('published', $data['published']);
		}

		if ( isset ($data['menu']) )
		{
			$q->where('menu', $data['menu']);
		}

		return $paginate ? 
		$q->paginate()->appends($data)
		: $q->get();
	}

}