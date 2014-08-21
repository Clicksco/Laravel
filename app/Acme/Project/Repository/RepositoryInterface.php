<?php
namespace Acme\Project\Repository;

interface RepositoryInterface
{
    public function all();

    public function create(Array $properties = []);

    public function delete($id);

    public function find($id);

    public function update($id, Array $properties);
}
