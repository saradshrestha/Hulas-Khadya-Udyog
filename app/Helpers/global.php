<?php

use App\Model\SiteSetting;
use Category\Models\Category;
use Files\Models\UploadFile;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



use function PHPSTORM_META\map;

/**
 * Created by PhpStorm.
 * User: Aalok
 * Date: 3/15/2021
 * Time: 3:54 PM
 */




function returnSiteSetting($key = null)
{
    if ($key != null) {
        $sitesetting = SiteSetting::where('key', $key)->first();
        if ($sitesetting) {

            return $sitesetting->value;
        }
    }
    return null;
}


function thumbnail_url($file)
{
    $supportExtension = array('jpg', 'png', 'gif', 'webp');
    if (in_array($file->extension, $supportExtension)) {
        return Storage::url('resize/' . $file->path);
    } else {
        return Storage::url($file->path);
    }

    return null;
}

function getThumbnailUrl($id)
{
    $file = UploadFile::where('id', $id)->first();
    if ($file) {
        $supportExtension = array('jpg', 'png', 'gif', 'webp');
        if (in_array($file->extension, $supportExtension)) {
            return Storage::url('resize/' . $file->path);
        } else {
            return Storage::url($file->path);
        }
    }
    return null;
}

function checkFileExists($file = null){
    if(isset($file->path)){
        if(Storage::exists($file->path)){
            return true;
        }
        return false;
    }
    return false;
}


function getOrginalUrl($id)
{
    $file = UploadFile::where('id', $id)->first();
    if ($file) {
        return Storage::url($file->path);
    }
    return null;
}



function original_url($file)
{
    $supportExtension = array('jpg', 'png', 'gif', 'webp');
    if (in_array($file->extension, $supportExtension)) {
        return Storage::url($file->path);
    } else {
        return Storage::url($file->path);
    }

    return null;
}


function returnImage($image, $path)
{
    if (File::exists($path)) {
        File::delete($path);
    }
    $requestedimage = $image;
    $imagename = time() . str_replace(" ", "", $requestedimage->GetClientOriginalName());
    $path = public_path('image/product');

    $requestedimage->move($path, $imagename);
    return 'image/product/' . $imagename;
}



function getFileUrlByUploads($upload = null, $type = null)
{
    $file = $upload;
    if ($file != null) {

        if ($type == "small") {
            $supportExtension = array('jpg', 'png', 'gif', 'webp');
            if (in_array($file->extension, $supportExtension)) {
                return Storage::url('resize/' . $file->path);
            } else {
                return Storage::url($file->path);
            }
        } else {
            return Storage::url($file->path);
        }
    }
    return null;
}


function in_array_any($needles, $haystack) {
    return !empty(array_intersect($needles, $haystack));
}



function getCategoriesWithProducts(){
    $allCategories = Category::active()->where('parent_id',0)
                        ->orWhere('parent_id', null)
                        ->with('children')->orderBy('category_position','ASC')->get();
    return $allCategories;
}



