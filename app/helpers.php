<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use App\Model\PostType;
use App\Model\GobalPost;
use App\Model\GobalPostMeta;
use App\Model\Category;
use App\Model\SiteSetting;

function getSiteSetting($key)
{
    $config = SiteSetting::where('key', '=', $key)->first();
    if ($config != null) {
        return $config->value;
    }
    return null;
}


function getSeoKewords($keywords)
{
    $data = [];
    if ($keywords) {
        foreach (unserialize($keywords) as $key => $thiskeyword) {
            $data[$key] = $thiskeyword;
        }
    }
    return implode(',', $data);
}


function getContactMessages()
{
    $contacts =  \App\Model\Contact::where('seen', 0)->take(3)->get();
    if ($contacts != null) {
        return $contacts;
    }
    return null;
}

function getAuthUser()
{

    if (\Cartalyst\Sentinel\Laravel\Facades\Sentinel::check() == false) {
        return null;
    }
    $user = \Cartalyst\Sentinel\Laravel\Facades\Sentinel::getUser();
    return $user;
}

function getFooterBlogs()
{
    $blogs = GobalPost::where('post_type', 6)->where('status', 'Active')->take(2)->get();
    if ($blogs != null) {
        return $blogs;
    }
    return null;
}

function fileupload($path, $file)
{
    if ($file) {

        $uploadedfile =  time() . '.' . $file->getClientOriginalName();

        $destinationPath = public_path($path);
        $file->move($destinationPath, $uploadedfile);

        return $path . $uploadedfile;
    }
    return null;
}
function bookupload($path, $file)
{
    if ($file) {

        $uploadedfile =  time() . '.' . $file->getClientOriginalName();

        $destinationPath = public_path($path);
        $file->move($destinationPath, $uploadedfile);

        return $path . $uploadedfile;
    }
    return null;
}


function imageDelete($data)
{
    if ($data->image) {
        $orginalpath = public_path() . '/' . $data->image;
        $thumbnailpath = public_path() . '/thumbnail/' . $data->image;
        if (file_exists($orginalpath)) {
            unlink($orginalpath);
        }
        if (file_exists($thumbnailpath)) {
            unlink($thumbnailpath);
        }
    }
}



function array_add($array, $key, $value)
{
    return Arr::add($array, $key, $value);
}

function seperator($depth)
{
    $space = '';
    for ($i = 1; $i < $depth; $i++) {
        $space .= '-';
    }
    return $space;
}



function getPostTypes()
{

    $postTypes = PostType::where('status', 'Active')->orderBy('position', 'ASC')->get();
    return $postTypes;
}


function getPostTypeBySlug($post_type)
{
    $post_type =  $postTypes = PostType::where('slug', $post_type)->first();

    if ($post_type) {
        return $post_type;
    }
    return redirect()->route('admin.dashboard');
}


function getGobalPostByPostType($post_type)
{
    $post_type =  $postTypes = PostType::where('slug', $post_type)->first();
    if ($post_type) {
        $gobalPosts = GobalPost::where('post_type', $post_type->id)->get();
        return $gobalPosts;
    }
    return redirect()->route('admin.dashboard');
}

function getGobalPostBySlug($slug)
{
    $gobalPost = GobalPost::where('slug', $slug)->first();
    if ($gobalPost) {
        return $gobalPost;
    }
    return redirect()->route('admin.dashboard');
}


function unserializeCustomFeild($data)
{

    if ($data) {
        return unserialize($data);
    }

    return null;
}


function returnField($postType, $position)
{
    $customFields = $postType->customFields;
    return view('admin.gobal_post.getfield', compact('customFields', 'position'));
}

function returnFieldwithValue($postType, $position, $post)
{
    $customFields = $postType->customFields;
    return view('admin.gobal_post.getfield', compact('customFields', 'position', 'post'));
}

function getPostFieldData($post, $field_name)
{
    $getField = $post->postMetas->where('key', $field_name)->first();

    if ($getField) {
        $serializePostType = array('post_type', 'repeater', 'checkbox');
        if (in_array($getField->post_type, $serializePostType)) {

            return unserializeCustomFeild($getField->value);
        } else {
            return $getField->value;
        }
    }

    return null;
}


function filedFileDelete($post_id, $key)
{

    $postMeta = GobalPostMeta::where('gobal_post_id', $post_id)->where('key', $key)->first();
    if (isset($postMeta->value)) {
        if ($postMeta->post_type == 'image') {
            $orginalpath = public_path() . '/' . $postMeta->value;
            $thumbnailpath = public_path() . '/thumbnail/' . $postMeta->value;
            if (file_exists($orginalpath)) {
                unlink($orginalpath);
            }
            if (file_exists($thumbnailpath)) {
                unlink($thumbnailpath);
            }
        } else {
            File::delete(public_path($postMeta->value));
        }
    }
}


function getPostFieldId($post, $field_name)
{
    $getField = $post->postMetas->where('key', $field_name)->first();
    if ($getField) {
        return $getField->id;
    }

    return null;
}


function returnGobalPost($post_type)
{
    $gobalPosts = GobalPost::where('post_type', $post_type)->where('status', 'Active')->get();
    return $gobalPosts;
}


function gobalPostImage($id, $type = null, $imgclass = null, $imgid = null)
{
    $post = GobalPost::find($id);
    if ($post->image) {

        $imageAlt = $post->seoable ? $post->seoable->img_alt : $post->title;
        $imageTitle = $post->seoable ? $post->seoable->img_alt : $post->title;
        if ($type == "thumbnail") {
            return '<img src="' . asset("thumbnail/" . $post->image) . '" class="' . $imgclass . '"  alt="' . str_replace(' ', '', $post->title) . '" title="' . $imageTitle . '" />';
        } else {
            return '<img src="' . asset($post->image) . '" class="' . $imgclass . '"  alt="' . str_replace(' ', '', $post->title) . '" title="' . $imageTitle . '" />';
        }
        return null;
    }
    return null;
}
