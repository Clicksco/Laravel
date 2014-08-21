<?php
namespace Acme\Project\Repository;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    /**
     * Create a new repository using a given Eloquent model
     *
     * @param object $model An Eloquent Model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Return all the items
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Create a new Model with the provided properties
     *
     * @param  array $properties
     * @return Model
     */
    public function create(Array $properties = [])
    {
        return $this->model->create($properties);
    }

    /**
     * Find a single object for the given ID
     *
     * @param  integer $id
     * @throws Illuminate\Database\Eloquent\ModelNotFoundException If not found
     * @return Model
     */
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Update a Model with ID using the provided properties
     * @param  integer $id
     * @param  Array  $properties
     * @throws Illuminate\Database\Eloquent\ModelNotFoundException If not found
     * @return mixed Model or false on fail
     */
    public function update($id, Array $properties)
    {
        $object = $this->model->findOrFail($id);
        if ($object->update($attributes)) {
            return $object;
        }
        return false;
    }
}
