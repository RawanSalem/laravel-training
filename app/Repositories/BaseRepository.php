<?php

namespace App\Repositories;

use App\Contracts\RepositoryInterface;
use Exception;
use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @var Application
     */
    protected $app;

    /**
     * @param Application $app
     *
     * @throws Exception
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Configure the Model
     *
     * @return string
     */
    abstract public function model();

    /**
     * Make Model instance
     *
     * @return Model
     * @throws Exception
     *
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (! $model instanceof Model) {
            throw new Exception(
                "Class {$this->model()} must be an instance
                of Illuminate\\Database\\Eloquent\\Model"
            );
        }

        return $this->model = $model;
    }

    /**
     * Get all instances of model
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Get all instances of model
     * @return mixed
     */
    public function allQuery()
    {
        return $this->model->newQuery();
    }

    /**
     * create a new record in the database
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * create or updated record from the database
     * @param array $attributes
     * @param array $values
     * @return mixed
     */
    public function updateOrCreate(array $attributes, array $values = [])
    {
        return $this->model->updateOrCreate($attributes, $values);
    }

    /**
     * update record in the database
     * @param array $data
     * @param $model
     * @return mixed
     */
    public function update(array $data, $model)
    {
        $record = $model instanceof Model ? $model : $this->model->find($model);
        return $record->update($data);
    }

    /**
     * remove record from the database
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * find or return exception if not found
     * @param $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Eager load database relationships
     * @param $relations
     * @return mixed
     */
    public function with($relations)
    {
        return $this->model->with($relations);
    }

    /**
     * Applies the given where conditions to the model.
     *
     * @param array $where
     * @return mixed
     */
    public function findWhere(array $where)
    {
        $condition = '=';
        foreach ($where as $field => $value) {
            if (is_array($value)) {
                list($field, $condition, $value) = $value;
            }
            $this->model = $this->model->where($field, $condition, $value);
        }
        return $this;
    }

    /**
     * get data paginated
     * @param $pageSize
     * @return mixed
     */
    public function paginate($pageSize)
    {
        return $this->model->paginate($pageSize);
    }

    /**
     * remove record from the database
     * @param array $where
     * @return mixed
     */
    public function deleteWhere(array $where)
    {
        return $this->findWhere($where)->model->delete();
    }

    public function first()
    {
        return $this->model->first();
    }
}
