<?php

namespace Product\Http\Controllers\Admin;


use App\GlobalService\ResponseService;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Product\Repositories\ProductInterface;
use Illuminate\Http\Request;
use Product\Models\Product;
use Illuminate\Support\Facades\Route;
use Product\Http\Requests\ProductRequest;
use Product\Http\Requests\ProductUpdate;
use Product\Models\ProductImage;
use Product\Models\ProductMeta;
use App\Model\SeoContent;
use Category\Models\Category;

class ProductController extends Controller
{
    public $product,$response;
    public function __construct(ProductInterface $product, ResponseService $response){
        $this->product = $product;
        $this->response = $response;
    }

    public function index(){
        try{
            $allproducts = $this->product->allproducts();
            $allcategories = $this->product->getCategories();
            return view('Product::admin.index',compact('allproducts','allcategories'));
        }catch (\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function addProduct(){
        // try{
            $seoContents = SeoContent::all();
            $keywords = [];
            foreach ($seoContents as $content){
                if($content->meta_keyword){
                    $keywords=array_merge($keywords, unserialize($content->meta_keyword));
                }
            }
            $keywords = array_unique($keywords);
            // $allcategories = $this->product->getCategories();

            $categories = Category::latest()->get();
            return view('Product::admin.addProduct',compact('categories','keywords'));
        // }catch(\Exception $e){
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }


    public function addProductSubmit(ProductRequest $request){
        try{
            $addproduct = $this->product->store($request);
            if(!$addproduct ){
                Toastr::error("Something Went Wrong While Adding The Product");
                return redirect()->back();
            }
            Toastr::success('Successfully Added');
            return redirect()->back();
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function editProduct($slug){
        try{
            $seoContents = SeoContent::all();
            $keywords = [];
            foreach ($seoContents as $content){
                if($content->meta_keyword){
                    $keywords=array_merge($keywords, unserialize($content->meta_keyword));
                }
            }
            $keywords = array_unique($keywords);
            $product = $this->product->getProductBySlugWithMeta($slug);
            $categories = Category::latest()->get();

            return view('Product::admin.editProduct',compact('product', 'keywords','categories'));  

        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function editProductSubmit(ProductUpdate $request, $slug){
        try{
            $product = $this->product->update($slug,$request);
            if($product){
                Toastr::success('Edited Successfully');
                return redirect()->route('admin.product.allProducts')->with('success','Edited Successfully');
            }
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function deleteSpecification($id){
        try{
            $productMeta = ProductMeta::where('id', $id)->first();
            $productMeta->delete();

            Toastr::success('Successfully Deleted');
            return redirect()->back();
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function deleteProductImage(Request $request,$id){
        try{
            $productimage = ProductImage::where('product_id', $id)->where('image_id', $request->imageid)->first();
            if($productimage){
                $productimage->delete();
                return $this->response->responseSuccessMsg("Successfully deleted");
            }
        }catch(\Exception $e){
            return $this->response->responseError($e->getMessage());
        }
    }

    public function deleteProduct($id){
        try{
            $product = $this->product->delete($id);
            if($product){
                return redirect()->back()->with('succss','deleted Successfully');
            }
        }
        catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function changeStatus(Request $request){
        try {
            $product = $this->product->changestatus($request);
            if (!$product) {
                return $this->response->responseError('Product not found!', 404);
            }
            return $this->response->responseSuccessMsg("Successfully Updated.");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage(), 400);
        }
    }


        
    public function changeFeature(Request $request) {
        try {
            $product = $this->product->changeFeature($request);
            if (!$product) {
                return $this->response->responseError('Product not found!', 404);
            }
            $data = $product->is_featured;
            return $this->response->responseSuccess($data,"Success");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage(), 400);
        }
    }
    

    public function searchProduct(Request $request){
        try{
            if($request->search != null){
            $searchresults = $this->product->searchProduct($request);
            if($searchresults != false){
                return view('Product::admin.searchProduct',compact('searchresults'));
            }
            }else{
                Toastr::error("Search Box Can't be empty");
                return redirect()->route('admin.product.allProducts');
            }

        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }

    }





}
