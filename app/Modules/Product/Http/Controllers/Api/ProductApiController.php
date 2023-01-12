<?php

namespace Product\Http\Controllers\Api;

use App\GlobalServices\ResponseService;
use App\Http\Controllers\Controller;
use Product\Http\Resources\ProductResource;
use Product\Models\Product;
use Product\Repositories\ProductInterface;
use Category\Repositories\CategoryInterface;
use Brand\Models\Brand;
use Category\Models\Category;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    protected $product, $response, $category;


    public function __construct(ProductInterface $product, ResponseService $response, CategoryInterface $category)
    {
        $this->product = $product;
        $this->response = $response;
        $this->category = $category;
    }

    public function allproduct(){
        try{
            $allproducts = $this->product->allproducts();
            return $this->response->responseSuccess(ProductResource::collection($allproducts)," Get All Products");
        }catch( \Exception $e){
            return $this->response->responseError($e->getMessage());
        }

    }

    public function product($id){
        try{
            $products = $this->product->getProductById($id);
            return $this->response->responseSuccess(new ProductResource($products)," Get Product By ID");
        }catch( \Exception $e){
            return $this->response->responseError($e->getMessage());
        }

    }

    public function productBySlug($slug){
        try{
            $products = $this->product->getProductBySlug($slug);
            return $this->response->responseSuccess(new ProductResource($products), " Get Products By  Slug");
        }catch( \Exception $e){
            return $this->response->responseError($e->getMessage());
        }

    }

    public function filterproduct(Request $request){
        try{
            $category = $this->category->getcategory($request->category);
            $products = $this->product->getProductCategoryById($category->id, $request);
            return $this->response->responseSuccess(ProductResource::collection($products), " Get products By Category Id");
        }catch( \Exception $e){
            return $this->response->responseError($e->getMessage());
        }

    }

    public function productByPrice(Request $request){
        try{
            $products = $this->product->ProductByPrice($request);
            return $this->response->responseSuccess(ProductResource::collection($products), " Get products By Price");

        }catch(\Exception $e){
            return $this->response->responseError($e->getMessage());
        }
    }
}
