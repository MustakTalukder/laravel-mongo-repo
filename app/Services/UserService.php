<?php


namespace App\Services;

use App;

use App\Contracts\Repositories\UserRepository;
use App\Contracts\Services\UserContact;
use App\Services\Validation\UserValidator;
use Carbon\Carbon;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Response;
use Illuminate\Http\Request;

class UserService implements UserContact
{

    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {

        $this->userRepository = $userRepository;
    }

    public function testInsert( $request)
    {
        $this->userRepository->create(['name'=>'TEST']);
    }


}
