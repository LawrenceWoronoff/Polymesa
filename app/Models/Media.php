<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use DB;

class Media extends Authenticatable
{
    use HasFactory, Notifiable;
    // use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table  = 'medias';

    protected $fillable = [
        'userId', 'title', 'categoryId', 'subcategoryId', 'path', 'taglist', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
    
    public function user()
    {
      return $this->belongsTo('App\Models\User', 'userId');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categoryId');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory', 'subcategoryId');
    }

    public function getLikedAttribute($value) {
        $media_id = $this->attributes['id'];
        return DB::table('media_rates')->where('mediaId', $media_id)->sum('liked');
    }
}
