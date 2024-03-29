<?php

namespace App\Modules\Framework;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

abstract class RepositoryImplementation
{

    public function __construct()
    {
    }

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public abstract function getModel();

    /**
     * Get all data.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->getModel()->orderBy('id', 'desc')->get();
    }


    /**
     * Find data by given an identifier.
     *
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findById($id)
    {
        return $this->getModel()->find($id);
    }


    /**
     * Search data by specify criteria.
     *
     * @param $searchKeyword
     * @param string $field
     * @return mixed
     */
    public function search($searchKeyword, $field = '')
    {
        $search = "%{$searchKeyword}%";
        return $this->getModel()
            ->where($field, 'like', $search)
            ->paginate($this->perPage());
    }

    /**
     * All or search query
     * @param null $searchQuery
     * @param string $field
     * @return mixed
     */
    public function allOrSearch($searchQuery = null, $field = '')
    {
        if (is_null($searchQuery)) {
            return $this->getAll();
        }
        return $this->search($searchQuery, $field);
    }

    /**Gets all data for data-table
     * @return mixed
     */
    public function getAllForDataTable()
    {
        $user = Auth::user();
        if ($user->isSuperAdmin()) {
            return $this->getModel()->query();
        } else {
            return $this->getModel()->query()->where('user_id', $user->id);

        }
    }

    /**
     * Get count of row being shown perpage.
     *
     * @return int
     */
    public function perPage()
    {
        $page = getSettingValue('pagination');
        return $page ? $page : 10;
    }

    /**
     * Get all data with pagination
     * @return mixed
     */
    public function getWithPagination()
    {
        return $this->getModel()->latest()->paginate($this->perPage());
    }

    /**
     * Find data by specified column name and value.
     *
     * @param string $key
     * @param string $value
     * @param string $operator
     *
     * @param bool $paginate
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findBy($key, $value, $operator = '=', $paginate = true)
    {
        if ($paginate) {
            return $this->getModel()->where($key, $operator, $value)->paginate($this->perPage());
        } else {
            return $this->getModel()->where($key, $operator, $value)->get();
        }
    }

    /**
     * Create a new data.
     *
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $data)
    {
        DB::beginTransaction();
        try {
            $entity = $this->getModel()->create($data);
            DB::commit();
            return $entity;
        } catch (\Exception $e) {
            DB::rollback();
            $this->log->error($this->entity_name . ' create : ' . $e->getMessage());
            return false;
        }

    }

    /**
     * Updates the row with the provided data and id
     *
     * @param array $data
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update(array $data, $id)
    {
        DB::beginTransaction();
        try {
            $entity = $this->findById($id);
            $entity->update($data);
            DB::commit();
            return $entity;
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            $this->log->error($this->entity_name . ' update : ' . $e->getMessage());
            return false;
        }

    }

    /**
     * Deletes a row with the provided id.
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $object = $this->findById($id);
        if (!is_null($object)) {
            $object->delete();
            return true;
        }
        return false;
    }


}
