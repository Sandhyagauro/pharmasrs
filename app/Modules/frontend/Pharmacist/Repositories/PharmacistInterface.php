<?php

namespace App\Modules\frontend\Pharmacist\Repositories;
use App\Modules\Framework\Repository;
use Illuminate\Http\Request;

interface PharmacistInterface extends Repository
{

    public function registerPharmacist($attributes);
}