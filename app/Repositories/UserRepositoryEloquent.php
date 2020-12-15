<?php


namespace App\Repositories;

use App;
use App\Contracts\Repositories\UserRepository;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    public function model()
    {
        return User::class;
    }



}
