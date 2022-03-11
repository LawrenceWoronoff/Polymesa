<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use App\Models\Tag;
// use App\Models\Category;

class TagController extends Controller
{
    protected $tag;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $tags_fetch = $this->tag->query()->orderBy('created_at', 'DESC')->get();
        
        return view('tags', ['tags_fetch' => $tags_fetch]);
    }

    public function addFeaturedTag(Request $request)
    {
        $cnt = $this->tag->query()->where('name', $request->name)->get()->count();
        if($cnt != 0)
            return redirect()->back()->with('warning', 'Duplicate Featured Tag Name');

        $this->tag->create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Featured Tag Added.');
    }

    public function destroy($id)
    {
        $this->tag->find($id)->delete();
        return redirect()->back()->with('success', 'Featured Tag Deleted.');
    }
}
