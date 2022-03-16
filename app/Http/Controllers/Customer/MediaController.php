<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use App\Models\Category;

class MediaController extends Controller
{
    protected $user;
    protected $category;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, Category $category)
    {
        $this->user = $user;
        $this->category = $category;

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

    public function mediaDetail(Request $request)
    {
        $categories = $this->category->query()->get();

        return view('media-detail', ['categories' => $categories]);
    }
}
