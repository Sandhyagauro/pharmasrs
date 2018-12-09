<?php namespace App\Modules\backend\Counseling\Repositories;

use App\Models\CounselingInfo;
use App\Modules\Framework\RepositoryImplementation;

class CounselingRepository extends RepositoryImplementation implements CounselingInterface

{
    public function getModel()
    {
        return new CounselingInfo();
    }

    public function counselingList()
    {
        $posts = CounselingInfo::select('users.name', 'users.email', 'category_departments.title', 'counseling_infos.*')
            ->leftjoin('category_departments', 'category_departments.id', '=', 'counseling_infos.category_department_id')
            ->join('users', 'users.id', '=', 'counseling_infos.user_id')
            ->orderBy('created_at', 'desc')
            ->get();

        return $posts;
    }

    public function show($attribute)
    {

        $post = CounselingInfo::select('users.*', 'category_departments.title', 'counseling_infos.*')
            ->where('counseling_infos.id', '=', $attribute)
            ->leftjoin('category_departments', 'category_departments.id', '=', 'counseling_infos.category_department_id')
            ->join('users', 'users.id', '=', 'counseling_infos.user_id')
            ->first();
        return $post;
    }
}