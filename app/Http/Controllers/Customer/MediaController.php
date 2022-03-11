<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class MediaController extends Controller
{
    protected $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
    }

    public function upload(Request $request)
    {
        $users_fetch = $this->user->query()->where('role', 'customer')->get();
        // var_dump($users_fetch);
        // exit(0);
        return view('upload', []);
    }

    public function voting(Request $request)
    {
        return view('community-voting');
    }
}
