<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

##############FOR IMAGE ############
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
 #######################################

class Article extends Model
{
    use HasFactory, SoftDeletes , CrudTrait ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'author',
        'title',
        'slug',
        'content',
        'image',
        'status',
        'date',
        'featured',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'date' => 'date',
        'featured' => 'boolean',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    ##############FOR IMAGE ############
        #composer require intervention/image
        # php artisan storage:link

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) 
        {
            Storage::delete(Str::replaceFirst('storage/','public/', $obj->image));
        });
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        // destination path relative to the disk above
        $destination_path = "public/articles";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            Storage::delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (Str::startsWith($value, 'data:image'))
        {
            // 0. Make the image
            $image = Image::make($value)->encode('jpg', 90);

            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';

            // 2. Store the image on disk.
            Storage::put($destination_path.'/'.$filename, $image->stream());

            // 3. Delete the previous image, if there was one.
            Storage::delete(Str::replaceFirst('storage/','public/', $this->{$attribute_name}));

            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it
            // from the root folder; that way, what gets saved in the db
            // is the public URL (everything that comes after the domain name)
            $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
        }
    }



    // public function setimageAttribute($value) {

    //     $image=$value;
    //     $input['thumbnail_image'] = $image->getClientOriginalName();
    //     $img = Image::make($image->getRealPath());

    //     $destinationPath = public_path('\storage\articles');
    //     $img->resize(750, 450, function ($constraint) {
    //     $constraint->aspectRatio();
    //     })->save($destinationPath."\\".$input['thumbnail_image']);

    //     $destinationPath = public_path('\storage\articles');

    //     $img->resize(100, 100, function ($constraint) {
    //     $constraint->aspectRatio();
    //     })->save($destinationPath.'"\"'.$input['thumbnail_image']);

    //     $image->move($destinationPath, $input['thumbnail_image']);
    //     $this->attributes['thumbnail_image'] = $input['thumbnail_image'];

    // }
}
