<?php
namespace Acme\Project\Repository;

interface RepositoryInterface
{
    public function all();

    public function create(Array $properties = []);

    public function delete($id);

    public function find($id, $with);

    public function has($relation, Array $with = []);

    public function update($id, Array $properties);
}
