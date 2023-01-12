<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaticContent\StaticContentRequest;
use App\Model\SeoContent;
use App\Model\StaticBlog;
use Illuminate\Support\Str;

class StaticContentController extends Controller
{
    public function index(){
        $blogs = StaticBlog::all();
        return view('admin.static_content.index', compact('blogs'));
    }

    public function create(){
        $seoContents = SeoContent::all();
        $keywords = [];
        foreach ($seoContents as $content) {
            if ($content->meta_keyword) {
                $keywords = array_merge($keywords, unserialize($content->meta_keyword));
            }
        }
        $keywords = array_unique($keywords);
        return view('admin.static_content.create',compact('keywords'));
    }

    public function store(StaticContentRequest $request){

        try{
            // dd($request->all());
            $blog = new StaticBlog();
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->status = $request->status ?? 'Active';
            $blog->description = $request->description;
            $blog->image = imageupload('/upload/static-blogs/', $request->file('image'));
            $response = $blog->save();
     
            if($response){
                $blog->seoable()->create([
                    'img_alt' => $request->img_alt ?? $request->title,
                    'img_title' => $request->img_title ?? $request->title,
                    'meta_title' => $request->meta_title ?? $request->title,
                    'meta_keyword' => $request->meta_keyword ? serialize($request->meta_keyword) : null,
                    'meta_description' => $request->meta_description,
                ]);

                return redirect()->back()->with('success', 'Content Successfully Created.');
            }else{
                return redirect()->back()->with('error', 'Error while Creating Content!!');
            }
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error while  Content!!');
        }
    }


    public function edit($slug)
    {
        $blog = StaticBlog::where('slug',$slug)->first();
        if($blog){
            $seoContents = SeoContent::all();
            $keywords = [];
            foreach ($seoContents as $content) {
                if ($content->meta_keyword) {
                    $keywords = array_merge($keywords, unserialize($content->meta_keyword));
                }
            }
            $keywords = array_unique($keywords);
            return view('admin.static_content.edit', compact('blog','keywords'));
        }else{
            return redirect()->back()->with('errors', 'Content Not Found!!! Refresh your page.');
        }
    }

    public function update(StaticContentRequest $request){

        try{
            $blog = StaticBlog::where('id', $request->blog_id)->first();
            $blog->title = $request->title;
            $blog->slug =  Str::slug($request->title);
            $blog->status = $request->status;
            $blog->description = $request->description;

            if ($request->hasFile('image')){
                imageDelete($blog);
                $blog->image = imageupload('/upload/static-blogs/', $request->file('image'));
            }
            $response = $blog->update();
            if($response){
                $blog->seoable()->updateOrCreate(['seoable_id' => $blog->id, 'seoable_type' => GobalPost::class], [
                    'img_alt' => $request->img_alt ?? $request->title,
                    'img_title' => $request->img_title ?? $request->title,
                    'meta_title' => $request->meta_title ?? $request->title,
                    'meta_keyword' => $request->meta_keyword ? serialize($request->meta_keyword) : null,
                    'meta_description' => $request->meta_description,
                ]);
                return redirect()->back()->with('success', 'Content Successfully Updated.');
            }else{
                return redirect()->back()->with('error', 'Error while Updating Content!!');
            }
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error while Updating Content!!');
        }
    }


    public function destroy($slug)
    {
        $blog = StaticBlog::where('slug', $slug)->first();
        if($blog){
            $blog->delete();
            return redirect()->back()->with('success', 'Content Successfully Deleted.');
        }else{
            return redirect()->back()->with('errors', 'Content Not Found!!! Refresh your page.');
        }
    }


}
