<?php namespace _cms\Sections;

use _cms\Base\BaseEntity;

interface SectionsRepoInterface {

	public function find($id);

	public function create(array $data);

	public function update(BaseEntity $entity, array $data);

	public function delete($entity);

	public function listSections($paginate);

	public function search(array $data, $paginate);

}