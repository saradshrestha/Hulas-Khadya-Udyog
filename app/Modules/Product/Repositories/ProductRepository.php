<?php

namespace Product\Repositories;

use Category\Models\Category;
use Product\Models\Product;
use Illuminate\Support\Facades\Auth;
use Files\Repositories\FileInterface;
use Product\Models\ProductImage;
use Product\Models\ProductMeta;
use Product\Models\QuantityType;

class ProductRepository implements ProductInterface {

    public $file;
    public function __construct(FileInterface $file)
    {
        $this->file =  $file;
    }
    public function allproducts(){
        return Product::simplePaginate(10);
    }


    public function getProductBySlug($slug){
        return Product::where('slug',$slug)->first();
    }

    public function getProductBySlugWithMeta($slug){
        return Product::where('slug',$slug)->with(['productMeta','productimages'])->first();
    }

    public function getProductById($id){
        return Product::where('id',$id)->first();

    }

    public function getProductCategoryById($id, $request){
        $product = Product::active();

        if($request->category){
            $category = Category::where('slug', $request->category)->first();
            if($category){
                $product = $product->where('category_id', $category->id);
            }
        }
        if($request->max_price && $request->min_price){
            $product = $product->where('product_price','<=',$request->max_price)
            ->where('product_price','>=',$request->min_price);
        }
        if($request->max_price){

            $product = $product->where('product_price','<=',$request->max_price);
        }
        if($request->min_price){
            $product = $product->where('product_price','>=',$request->min_price);
        }
        return $product->get();
    }


    public function store($request){
        // dd($request->all());
        $product = new Product();
        $product->title = $request->title;
        $product->sku = $request->product_sku;
        $product->sub_title = $request->sub_title;
        $product->status = $request->status;
        $product->category_id = $request->category;
        $product->purchase_link = $request->purchase_link;
        $product->is_featured = $request->is_featured;
        $product->user_id = Auth::user()->id ?? 1;
        $product->specification = $request->product_specs;
        $product->highlights = $request->highlight_feature;
        $product->product_position = $request->product_position;

        if($request->hasFile('feature_image')){
            $uploaded = $this->file->storeFile($request->feature_image);
            if ($uploaded) {
                $product->feature_image = $uploaded->id;
            }
        }

        if($request->hasFile('product_manual')){
            $uploaded = $this->file->storeFile($request->product_manual);
            if ($uploaded) {
                $product->manual_pdf_id = $uploaded->id;
            }
        }
        $product->save();


        // if($request->spec){
        //     $speckeys = array_keys($request->spec);

        //     foreach($speckeys as $key){

        //             $uploaded = $this->file->storeFile($request->spec[$key]['image']);
        //             $product->productMeta()->create([
        //                 'title' => $request->spec[$key]['title'],
        //                 'image_id' => $uploaded->id
        //             ]);

        //     }

        // }
        if($product && $request->image_ids){
            foreach($request->image_ids as $image){
                $uploaded = $this->file->storeFile($image);

               $product->images()->create([
                'image_id' => $uploaded->id,
               ]);
            }
        }
        
         $product->seoable()->create([
                    'img_alt'=>$request->img_alt??$request->title,
                    'img_title'=>$request->img_title??$request->title,
                   'meta_title'=>$request->meta_title??$request->title,
                    'meta_keyword'=>$request->meta_keyword?serialize($request->meta_keyword):null,
                    'meta_description'=>$request->meta_description,
                ]);


        return $product;
    }


    public function update($slug, $request){
        // dd($request->all());
        $product = Product::where('slug',$slug)->first();
        $product->title = $request->title;
        $product->sku = $request->product_sku;
        $product->sub_title = $request->sub_title;
        $product->status = $request->status;
        $product->category_id = $request->category;
        $product->purchase_link = $request->purchase_link;
        $product->is_featured = $request->is_featured;
        $product->user_id = Auth::user()->id ?? 1;
        $product->specification = $request->product_specs;
        $product->highlights = $request->highlight_feature;
        $product->product_position = $request->product_position;

        if($request->hasFile('feature_image')){
            $uploaded = $this->file->storeFile($request->feature_image);
            if ($uploaded) {
                $product->feature_image = $uploaded->id;
            }
        }

        if($request->hasFile('product_manual')){
            $uploaded = $this->file->storeFile($request->product_manual);
            if ($uploaded) {
                $product->manual_pdf_id = $uploaded->id;
            }
        }

        $product->update();

        // if($request->spec){

        //     $speckeys = array_keys($request->spec);

        //     foreach($speckeys as $key){
        //         if(isset($request->spec[$key]['image'])){
        //             $uploaded = $this->file->storeFile($request->spec[$key]['image']);
        //               $product->productMeta()->updateOrCreate([
        //                 'id' => $key,

        //             ], [
        //                 'title' => $request->spec[$key]['title'],
        //                 'image_id' => $uploaded->id

        //             ]);

        //         }else{
        //             $productMeta = ProductMeta::where('product_id', $product->id)
        //             ->where('id', $key)->first();
        //              $product->productMeta()->updateOrCreate([
        //                     'id' => $key,

        //                 ], [
        //                     'title' => $request->spec[$key]['title'],
        //                     'image_id' =>$productMeta->image_id

        //                 ]);
        //         }
                   

        //     }

        // }
        if($product && $request->image_ids){
            foreach($request->image_ids as $image){
                $uploaded = $this->file->storeFile($image);

               $product->images()->create([
                'image_id' => $uploaded->id,
               ]);
            }
        }
        
         $product->seoable()->updateOrCreate(['seoable_id'=>$product->id, 'seoable_type'=>Product::class],[
                   'img_alt'=>$request->img_alt??$request->title,
                   'img_title'=>$request->img_title??$request->title,
                   'meta_title'=>$request->meta_title??$request->title,
                   'meta_keyword'=>$request->meta_keyword?serialize($request->meta_keyword):null,
                   'meta_description'=>$request->meta_description,
               ]);

        return $product->update();
        
        

    }
    public function delete($id){
        $product = Product::where('id',$id)->first();

        if(!empty($product->productMeta)){
            foreach($product->productMeta as $productMeta){
                $productMeta->delete();
            }
        }


        if(!empty($product->images)){
            foreach($product->images as $productimage){
                $this->file->delete($productimage->id);
                $productimage->delete();
            }
        }
        return $product->delete();
    }

    public function getCategories(){
        return Category::active()->with('children')->get();
    }

    public function getQuantityTypes()
    {
        return QuantityType::all();
    }

    public function uploadImage($request)
    {
        if($request->hasFile('image')){
            $uploaded = $this->file->storeFile($request->image);
            return $uploaded;
        }
        return false;
    }

    public function deleteimage($request){
        $upload = $this->file->delete($request->additional);
        if($upload){
            ProductImage::where('image_id',$request->additional)->delete();
            return true;
        }
        return false;

    }

    public function changestatus($request)
    {
        $product = Product::where('id',$request->product_id)->first();
        if ($product->status == "active") {
            $product->status = "inactive";
        } else {
            $product->status = "active";
        }
        $product->update();
        return true;
    }


    public function changeFeature($request) {
        $product = Product::where('id',$request->product_id)->first();
        if ($product->is_featured == "Yes") {
            $product->is_featured = "No";
        } else {
            $product->is_featured = "Yes";
        }
        $product->update();
        return $product;
    }

    public function searchProduct($request)
    {
        if($request->search){
            $results = Product::where('title', 'like', '%' . $request->search . '%')
                    ->paginate(10);
            return $results;
        }
        return false;
    }

    public function ProductByPrice($request){
        if($request->max_price && $request->min_price){
            return Product::where('product_price','<=',$request->max_price)
            ->where('product_price','>=',$request->min_price)->get();
        }elseif($request->max_price){
            return Product::where('product_price','<=',$request->max_price)->get();
        }else{
            return Product::where('product_price','>=',$request->min_price)->get();
        }

    }


    public function getProductByCategoryID($id){
        return Product::where('category_id', $id)->get();
    }



}
