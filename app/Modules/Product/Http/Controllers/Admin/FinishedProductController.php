<?php

namespace Product\Http\Controllers\Admin;


use App\GlobalService\ResponseService;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;
use Product\Http\Requests\ProductUpdate;
use Product\Models\ProductImage;
use Product\Models\ProductMeta;
use App\Model\SeoContent;
use Files\Repositories\FileInterface;
use Product\Models\FinishedProduct;
use Product\Models\Product;

class FinishedProductController extends Controller
{
    public $file,$response;
    public function __construct(FileInterface $file, ResponseService $response){
        $this->file = $file;
        $this->response = $response;
    }

    public function index(){
        try{
           $allproducts = FinishedProduct::paginate(10);
            return view('Product::admin.finishedProducts.index',compact('allproducts'));
        }catch (\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function create(){
        try{
            $seoContents = SeoContent::all();
            $keywords = [];
            foreach ($seoContents as $content){
                if($content->meta_keyword){
                    $keywords=array_merge($keywords, unserialize($content->meta_keyword));
                }
            }

            $keywords = array_unique($keywords);
            $products = Product::get();

            return view('Product::admin.finishedProducts.create',compact('keywords','products'));
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function store(Request $request){
        try{
            // dd($request->all());
            $product = new FinishedProduct();
            $product->title = $request->title;
            $product->description = $request->product_specs;
            $product->product_id = $request->product;    
            if($request->hasFile('feature_image')){
                $uploaded = $this->file->storeFile($request->feature_image);
                if ($uploaded) {
                    $product->image_id = $uploaded->id;
                }
            }
            $product->seoable()->create([
                'img_alt'=>$request->img_alt??$request->title,
                'img_title'=>$request->img_title??$request->title,
                'meta_title'=>$request->meta_title??$request->title,
                'meta_keyword'=>$request->meta_keyword?serialize($request->meta_keyword):null,
                'meta_description'=>$request->meta_description,
            ]);
            if($product->save() == false ){
                Toastr::error("Something Went Wrong While Adding The Finidhed Product");
                return redirect()->back();
            }
            Toastr::success('Successfully Added');
            return redirect()->back();
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function edit($slug){
        try{
            $seoContents = SeoContent::all();
            $keywords = [];
            foreach ($seoContents as $content){
                if($content->meta_keyword){
                    $keywords=array_merge($keywords, unserialize($content->meta_keyword));
                }
            }
            $keywords = array_unique($keywords);
            $products = Product::get();
            $product = FinishedProduct::where('slug',$slug)->first();
            return view('Product::admin.finishedProducts.edit',compact('product', 'keywords','products'));  

        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(Request $request, $slug){
        try{
            // dd($request->all());
            $product = FinishedProduct::where('slug',$slug)->first();
            if($slug){
                $product->title = $request->title;
                $product->description = $request->product_specs;
                $product->product_id = $request->product;    
                if($request->hasFile('feature_image')){
                    $uploaded = $this->file->storeFile($request->feature_image);
                    if ($uploaded) {
                        $product->image_id = $uploaded->id;
                    }
                }
                if($product->update() == true){
                    $product->seoable()->updateOrCreate(['seoable_id'=>$product->id, 'seoable_type'=>FinishedProduct::class],[
                        'img_alt'=>$request->img_alt??$request->title,
                        'img_title'=>$request->img_title??$request->title,
                        'meta_title'=>$request->meta_title??$request->title,
                        'meta_keyword'=>$request->meta_keyword?serialize($request->meta_keyword):null,
                        'meta_description'=>$request->meta_description,
                    ]);
     
                    Toastr::success('Edited Successfully');
                    return redirect()->route('admin.finishedProduct.index');
                }
            }
           
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


 

    public function deleteProduct($slug){
        try{
            $product = FinishedProduct::where('slug',$slug)->first();
            if($product){
                $product->delete();
                Toastr::success('Successfully Deleted');
                return redirect()->route('admin.finishedProduct.index');
                
            }
        }
        catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function searchFinalProduct(Request $request){
        try{
            if($request->search){
                $searchresults = FinishedProduct::where('title', 'like', '%' . $request->search . '%')
                        ->with('mainProduct')->paginate(10);
                if($searchresults){
                    return view('Product::admin.finishedProducts.searchProduct',compact('searchresults'));
                }
            }
            else{
                Toastr::error("Search Box Can't be empty");
                return redirect()->route('admin.finishedProduct.index');
            }
        } catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


   


        
   

    // public function searchProduct(Request $request){
    //     try{
    //         if($request->search != null){
    //         $searchresults = $this->product->searchProduct($request);
    //         if($searchresults != false){
    //             return view('Product::admin.searchProduct',compact('searchresults'));
    //         }
    //         }else{
    //             Toastr::error("Search Box Can't be empty");
    //             return redirect()->route('admin.product.allProducts');
    //         }

    //     }catch(\Exception $e){
    //         Toastr::error($e->getMessage());
    //         return redirect()->back();
    //     }

    // }





}
