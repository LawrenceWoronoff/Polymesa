<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Media;

use File;

class MediaController extends Controller
{
    protected $user;
    protected $category;
    protected $media;
    protected $subcategory;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, Category $category, Media $media, Subcategory $subcategory)
    {
        $this->user = $user;
        $this->category = $category;
        $this->media = $media;
        $this->subcategory = $subcategory;

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
        // $image = 'public/assets/medias/1647494055_1647494055142DSC_0492.JPG';
        
        // $width = getimagesize($image)[0];
        // $height = getimagesize($image)[1];
        
        // $exif = @exif_read_data($image, 0, true); 
        // $final_img_info['make'] = @$exif['IFD0']['Make'];         
        // $final_img_info['model'] = @$exif['IFD0']['Model'];         
        // $final_img_info['ApertureFNumber'] = @$exif['COMPUTED']['ApertureFNumber']; 
        // $final_img_info['ISO'] = @$exif['EXIF']['ISOSpeedRatings'];  
        // $shutterSpeedValue = explode('/', @$exif['EXIF']['ShutterSpeedValue']);
        // if(count($shutterSpeedValue) == 2)
        //     $final_img_info['ShutterSpeedValue'] = intval($shutterSpeedValue[0]) / intval($shutterSpeedValue[1]);
        // $focalLength = explode('/', @$exif['EXIF']['FocalLength']);
        // if(count($focalLength) == 2)
        //     $final_img_info['FocalLength'] = intval($focalLength[0]) / intval($focalLength[1]);

        // $final_img_info['width'] = $width;
        // $final_img_info['height'] = $height;
        // // $final_img_info['mega_size'] = number_format($image->getSize() / 1024 / 1024, 2);
        // // $final_img_info['size'] = $image->getSize() / 1024 / 1024;
        // // $final_img_info['extension'] = $image->extension();

        // var_dump($final_img_info);
        // exit(0);
        

        $categories = $this->category->query()->get();
        $subcategories = [];
        if(count($categories) > 0)
        {
            $subcategories = $this->subcategory->query()->where('parentID', $categories[0]->id)->get();
        }
        return view('upload', ['categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function voting(Request $request)
    {
        return view('community-voting');
    }

    public function mediaDetail(Request $request, $id)
    {
        $media = $this->media->query()->where('id', $id)->first();
        $categories = $this->category->query()->get();
        
        // Media Detail Info

        // $path =$imag
        $image = 'public/assets/medias/'. $media->path;
        $fileExtension = substr($media->path, strripos($media->path, '.') + 1);
        
        $width = getimagesize($image)[0];
        $height = getimagesize($image)[1];
        
        $exif = @exif_read_data($image, 0, true); 
        $final_img_info['make'] = @$exif['IFD0']['Make'];         
        $final_img_info['model'] = @$exif['IFD0']['Model'];         
        $final_img_info['ApertureFNumber'] = @$exif['COMPUTED']['ApertureFNumber']; 
        $final_img_info['ISO'] = @$exif['EXIF']['ISOSpeedRatings'];  
        $shutterSpeedValue = explode('/', @$exif['EXIF']['ShutterSpeedValue']);
        if(count($shutterSpeedValue) == 2)
            $final_img_info['ShutterSpeedValue'] = intval($shutterSpeedValue[0]) / intval($shutterSpeedValue[1]);
        else
            $final_img_info['ShutterSpeedValue'] = null;

        $focalLength = explode('/', @$exif['EXIF']['FocalLength']);
        if(count($focalLength) == 2)
            $final_img_info['FocalLength'] = intval($focalLength[0]) / intval($focalLength[1]);
        else
            $final_img_info['FocalLength'] = null;

        $final_img_info['width'] = $width;
        $final_img_info['height'] = $height;
        $final_img_info['fileExtension'] = $fileExtension;
        
        return view('media-detail', ['media' => $media, 'categories' => $categories, 'final_img_info' => $final_img_info]);
    }

    public function store(Request $request)
    {
        $image = $request->file('file');

        $width = getimagesize($image)[0];
        $height = getimagesize($image)[1];
        
        $exif = @exif_read_data($image, 0, true); 
        $final_img_info['make'] = @$exif['IFD0']['Make'];         
        $final_img_info['model'] = @$exif['IFD0']['Model'];         
        $final_img_info['ApertureFNumber'] = @$exif['COMPUTED']['ApertureFNumber']; 
        $final_img_info['ISO'] = @$exif['EXIF']['ISOSpeedRatings'];  
        $shutterSpeedValue = explode('/', @$exif['EXIF']['ShutterSpeedValue']);
        if(count($shutterSpeedValue) == 2)
            $final_img_info['ShutterSpeedValue'] = intval($shutterSpeedValue[0]) / intval($shutterSpeedValue[1]);
        $focalLength = explode('/', @$exif['EXIF']['FocalLength']);
        if(count($focalLength) == 2)
            $final_img_info['FocalLength'] = intval($focalLength[0]) / intval($focalLength[1]);

        // $final_img_info['DateTimeOriginal'] = @$exif['EXIF']['DateTimeOriginal'];  
        // $final_img_info['UserComment'] = @$exif['COMPUTED']['UserComment'];
        // $final_img_info['Flash'] = @$exif['EXIF']['Flash'];  
        // $final_img_info['softwareUsed'] = @$exif['IFD0']['Software'];        
        // $final_img_info['EditDateTime'] = @$exif['IFD0']['DateTime'];  
            
        $final_img_info['width'] = $width;
        $final_img_info['height'] = $height;
        $final_img_info['mega_size'] = number_format($image->getSize() / 1024 / 1024, 2);
        $final_img_info['size'] = $image->getSize() / 1024 / 1024;
        $final_img_info['extension'] = $image->extension();

        $final_img_info['resolution_error'] = false;
        $final_img_info['size_error'] = false;

        if($width <= 3000 || $height <= 3000)
            $final_img_info['resolution_error'] = true;

        if($final_img_info['size'] > 10)
            $final_img_info['size_error'] = true;

        if($image && $final_img_info['resolution_error'] == false && $final_img_info['resolution_error'] == false)
        {
            $fileName = time().'_'.$image->getClientOriginalName();
            $final_img_info['fileName'] = $fileName;
            $image->move('public/assets/medias/', $fileName);
        }
        return json_encode($final_img_info);
    }

    public function fileDestroy(Request $request)
    {
        $fileName = $request->fileName;
        $path='public/assets/medias/'. $fileName;
        if (file_exists($path)) {
            unlink($path);
        }
    }

    public function addMedia(Request $request)
    {
        $userId = Auth::user()->id;
        $categoryId = $request->categoryId;
        $subcategoryId = $request->subcategoryId;
        $path = $request->path;
        $taglist = $request->taglist; 

        $data = array(
            'userId' => $userId,
            'categoryId' => $categoryId,
            'subcategoryId' => $subcategoryId,
            'path' => $path,
            'taglist' => $taglist,
        );

        $this->media->create($data);
        return json_encode("success");
        // return redirect()->route('user-dashboard')->with('success', 'New media uploaded.');

    }
}
