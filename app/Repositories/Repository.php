<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use DB;

class Repository
{
    /**
     * Model to be used by the repository.
     * 
     * @var Model;
     */
    protected $model;


    /**
     * Initiate repository class
     * 
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getByID($id)
    {
        try {
            $user = $this->model->find($id);

            $arr = [
                'code'      => 200,
                'message'   => 'Successfuly model record.',
                'data'      => $user
            ];
        } catch (\Exception $e) {
            $arr = [
                'code'      => 500,
                'message'   => 'Error fetching model record.',
                'error'     => $e->getMessage(),
            ];
        }

        return $arr;
    }

    /**
     * Get a collection of the model
     * 
     * @param array $args array of arguments to be applied to the query
     * @return array $arr array response data
     */
    public function getAll(Array $args = [])
    {
        try {
            $collection = $this->model::all();
            
            if(isset($args['group']))
            {
                $collection = $collection->groupBy($args['group']);
            }

            $arr = [
                'code'      => 200,
                'message'   => 'Successfuly fetched collection.',
                'data'      => $collection,
            ];
        } catch (\Exception $e) {
            $arr = [
                'code'      => 500,
                'message'   => 'Error fetching collection.',
                'error'     => $e->getMessage(),
            ];
        }

        return $arr;
    }

    /**
     * Create a new instance of model
     * 
     * @param array $args array of values to be supplied to the new model
     * @return array $arr array response data
     */
    public function store($args)
    {
        DB::beginTransaction();
        try {
            $res = $this->model::create($args);

            $arr = [
                'code'      => 200,
                'message'   => 'Resource created successfuly.',
                'data'      => $res
            ];
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $arr = [
                'code'      => 500,
                'message'   => 'error creating resource',
                'err'       => $e,
            ];
        }

        return $arr;
    }

    /**
     * Update existing instance of model
     * 
     * @param integer $id id of resource to be updated
     * @param array $args array of values to be supplied to the new model
     * @return array $arr array response data
     */
    public function update($id, $args)
    {
        DB::beginTransaction();
        try {
            $res = $this->model::find($id)->update($args);

            $arr = [
                'code'      => 200,
                'message'   => 'Resource updated successfuly.',
                'data'      => $res
            ];
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $arr = [
                'code'      => 500,
                'message'   => 'error updating resource',
                'err'       => $e,
            ];
        }

        return $arr;
    }
}