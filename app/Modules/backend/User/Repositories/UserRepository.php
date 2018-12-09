<?php namespace App\Modules\backend\User\Repositories;

use App\Modules\backend\User\Repositories\UserInterface;
use App\Modules\Framework\RepositoryImplementation;
use App\User;

class UserRepository extends RepositoryImplementation implements UserInterface

{
    public function getModel()
    {
        return new User();
    }
}