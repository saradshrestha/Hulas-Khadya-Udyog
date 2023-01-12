<?php

namespace Category\Http\Controllers\Api;

use App\GlobalServices\ResponseService;
use App\Http\Controllers\Controller;
use Category\Http\Resources\CategoryResource;
use Category\Models\Category;
use Illuminate\Http\Request;
use Category\Repositories\CategoryInterface;
use CMS\Models\District;
use CMS\Models\Municipal;
use CMS\Models\Province;
use Illuminate\Support\Facades\DB;

class ApiCategoryController extends Controller
{
    public $category, $response;
    public function __construct(CategoryInterface $category, ResponseService $response)
    {
        $this->category = $category;
        $this->response = $response;

    }

    public function allcategories(){
        try{
            $allcategory = $this->category->allcategories();
            // return $this->response->responseSuccess(json_encode($allcategory), "success", 200);
            return $this->response->responseSuccess(
               [
                   'categories' =>  CategoryResource::collection($allcategory),
               ]," Get All Categories"
            );
        }catch( \Exception $e){
            return $this->response->responseError($e->getMessage());
        }
    }

    public function category($id){
        try{
            $category = $this->category->getCategoryById($id);
            return $this->response->responseSuccess(new CategoryResource($category), 'Get Category by Category ID');
        }catch(\Exception $e){
            return $this->response->responseError($e->getMessage());
        }

    }

    public function CategoryBySlug($slug){
        try{
            $category = $this->category->getcategory($slug);
            return $this->response->responseSuccess(new CategoryResource($category), " Get Category By Category Slug");
        }catch(\Exception $e){
            return $this->response->responseError($e->getMessage());
        }
    }


    public function provinces(Request $request){
        // return DB::table('municipals')->select('district_id','title','title_np',)->get()->toArray();
        $provinces = $request->all();
        // dd($provinces);
        foreach($provinces as $province){
            Municipal::create($province);

        }


    }






}
