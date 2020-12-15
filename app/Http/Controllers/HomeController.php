<?php

namespace App\Http\Controllers;

use App\Contracts\Services\UserContact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var UserContact
     */
    private $userContact;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserContact $userContact)
    {
        $this->middleware('auth');
        $this->userContact = $userContact;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function testInsert(Request $request)
    {
        $this->userContact->testInsert($request);
    }
}
