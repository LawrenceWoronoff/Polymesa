<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
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
        $audio_category_list = array();
        $categories = $this->category->query()->get();
        foreach($categories as $category)
        {
            if($category->mediaType == "Audio"){
                array_push($audio_category_list, $category->id);
            }
        }

        return view('user-dashboard', ['categories' => $categories, 'audio_category_list' => json_encode($audio_category_list)]);
    }
}
