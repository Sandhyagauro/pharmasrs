<?php namespace App\Modules\backend\Counseling\Repositories;

use App\Modules\Framework\Repository;

interface CounselingInterface extends Repository
{

    public function counselingList();
    public function show($attribute);
}