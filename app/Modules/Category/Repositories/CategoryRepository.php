<?php

namespace Category\Repositories;

use Category\Models\Category;
use Files\Repositories\FileInterface;
use Product\Models\Product;

class CategoryRepository implements CategoryInterface
{

    public $files;
    public function __construct(FileInterface $files)
    {
        $this->files = $files;
    }

    public function allcategories()
    {
        return Category::with('parent')->orderBy('category_position','ASC')->paginate(10);
    }

    public function getCategoryById($id){
        return Category::where('id', $id)->first();
    }

    public function getcategory($slug)
    {
        return Category::where('slug', $slug)->first();
    }

    public function store($request)
    {       
        $category = new Category();
        $category->title = $request->title;
        $category->sub_title = $request->sub_title;
        $category->parent_id = $request->parent_category;
        $category->category_icon = $request->category_icon;
        $category->status = $request->status;
        $category->category_position = $request->category_position;
        if ($request->hasFile('category_banner')) {
            $uploaded = $this->files->storeFile($request->category_banner);
            if ($uploaded) {
                $category->banner = $uploaded->id;
            }
        }
        if ($request->hasFile('category_logo')) {
            $uploaded = $this->files->storeFile($request->category_logo);
            if ($uploaded) {
                $category->logo = $uploaded->id;
            }
        }

        $category->featured = $request->featured == "Yes" ? 1 : 0;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        // $category->short_desc = $request->short_desc;
        $category->description = $request->description;
        $category->save();
        
        $category->seoable()->create([
                    'img_alt'=>$request->img_alt??$request->title,
                    'img_title'=>$request->img_title??$request->title,
                    'meta_title'=>$request->meta_title??$request->title,
                    'meta_keyword'=>$request->meta_keyword?serialize($request->meta_keyword):null,
                    'meta_description'=>$request->meta_description,
                ]);
        
    }

    public function update($slug, $request)
    {
        // dd($request->all());
      
        $category = Category::where('slug', $slug)->first();
        $category->title = $request->title;
        $category->sub_title = $request->sub_title;
        $category->parent_id = $request->parent_category;
        $category->category_icon = $request->category_icon;
        $category->status = $request->status;
        $category->category_position = $request->category_position;

        if ($request->hasFile('category_banner')) {
            $uploaded = $this->files->storeFile($request->category_banner);
            if ($uploaded) {
                $category->banner = $uploaded->id;
            }
        }
        if ($request->hasFile('category_logo')) {
            $uploaded = $this->files->storeFile($request->category_logo);
            if ($uploaded) {
                $category->logo = $uploaded->id;
            }
        }

        $category->featured = $request->featured == "Yes" ? 1 : 0;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        // $category->short_desc = $request->short_desc;
        $category->description = $request->description;
        $category->update();
        
         $category->seoable()->updateOrCreate(['seoable_id'=>$category->id, 'seoable_type'=>Category::class],[
                   'img_alt'=>$request->img_alt??$request->title,
                   'img_title'=>$request->img_title??$request->title,
                   'meta_title'=>$request->meta_title??$request->title,
                   'meta_keyword'=>$request->meta_keyword?serialize($request->meta_keyword):null,
                   'meta_description'=>$request->meta_description,
               ]);
               
               
               
        return $category;
    }
    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $product = Product::where('category_id', $category->id)->first();
        if ($product) {
            return false;
        } else {
            $category->delete();
            return true;
        }
    }

    public function getparentcategories()
    {
        return Category::where('parent_id', '0')->orWhere('parent_id', null)->with('children')->get();
    }

    public function changestatus($request)
    {
        $category = Category::findOrFail($request->category_id);
        if ($category->status == "Active") {
            $category->status = "Inactive";
        } else {
            $category->status = "Active";
        }
        $category->update();
        return $category;
    }

    public function changefeatured($request)
    {
        $category = Category::findOrFail($request->category_id);
        if ($category->featured == 0) {
            $category->featured = 1;
        } else {
            $category->featured = 0;
        }
        $category->update();
        return $category;
    }

    public function getproductbycategory($id)
    {
        $products = product::where('category_id', $id)->get();
        return $products;
    }
}
