<?php
namespace App\Modules\frontend\Categories\Repositories;
use App\Models\CategoryDepartment;
use App\Modules\Framework\RepositoryImplementation;


class CategoryRepository extends RepositoryImplementation implements CategoryInterface
{
    public function getModel()
    {
        return new CategoryDepartment();
    }
}