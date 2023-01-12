<?php

namespace Category\Http\Controllers\Admin;

use App\GlobalService\ResponseService;
use App\Http\Controllers\Controller;
use Category\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Category\Repositories\CategoryInterface;
use Category\Http\Requests\CategoryRequest;
use Category\Http\Requests\CategoryStore;
use Category\Http\Requests\CategoryUpdate;
use App\Model\SeoContent;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category, $response;
    public function __construct(CategoryInterface $category, ResponseService $response)
    {
        $this->category = $category;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $allcategories = $this->category->allcategories();
            return view('Category::admin.index',compact('allcategories'));
        } catch (\Exception $e) {
            Toastr::success($e->getMessage(), 'Error');
            return redirect()->back();
        }
    }


    public function addCategory()
    {
        try {
         $seoContents = SeoContent::all();
        $keywords = [];
        foreach ($seoContents as $content){
            if($content->meta_keyword){
                $keywords=array_merge($keywords, unserialize($content->meta_keyword));
            }

        }
        $keywords = array_unique($keywords);
            $parentcategories = $this->category->getparentcategories();
            return view('Category::admin.addCategory', compact('parentcategories', 'keywords'));
        } catch (\Exception $e) {
            Toastr::success($e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function CategorySubmit(CategoryStore $request)
    {
        try {
  
            $this->category->store($request);
            Toastr::success('Successfuly created.');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::success($e->getMessage(), 'Error');
            return redirect()->back();
        }
    }




    public function editCategory($slug)
    {
        try {
            $seoContents = SeoContent::all();
        $keywords = [];
        foreach ($seoContents as $content){
            if($content->meta_keyword){
                $keywords=array_merge($keywords, unserialize($content->meta_keyword));
            }

        }
        $keywords = array_unique($keywords);
            $category = $this->category->getcategory($slug);
            $parentcategories = $this->category->getparentcategories();
            return view('Category::admin.editCategory', compact('category', 'parentcategories', 'keywords'));
        } catch (\Exception $e) {
            Toastr::success($e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function editCategorySubmit(CategoryUpdate $request, $slug)
    {
        try {
            $category =  $this->category->update($slug, $request);
            if ($category) {
                Toastr::success('Category edit successfully :)', 'Success');
                return redirect()->back();
            }
            Toastr::error('Category edit Unsuccessfull :)', 'Error');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::success($e->getMessage(), 'Error');
            return redirect()->back();
        }
    }


    public function deleteCategory($slug)
    {
        try {
            $deletedcategory = $this->category->delete($slug);
            if ($deletedcategory === true) {
                return redirect()->back()->with('success', 'Category deleted successfully!!');
            } else {
                return redirect()->back()->with('error', 'Category exists in products' . $deletedcategory . 'so cant be deleted');
            }
        } catch (\Exception $e) {
            Toastr::success($e->getMessage(), 'Error');
            return redirect()->back();
        }
    }


    public function changeStatus(Request $request)
    {
        try {
            // dd('jhsdj');
            $category = $this->category->changestatus($request);
            if (!$category) {
                return $this->response->responseError('File not found!', 400);
            }
            return $this->response->responseSuccessMsg("Successfully Updated.");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage(), 400);
        }
    }


    public function changeFeatured(Request $request)
    {
        try {
            $category = $this->category->changefeatured($request);
            if (!$category) {
                return $this->response->responseError('File not found!', 400);
            }
            return $this->response->responseSuccessMsg("Successfully Updated.");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage(), 400);
        }
    }

    public function getproductbycategory($id)
    {
        $products = $this->category->getproductbycategory($id);
        return view('Category::admin.productByCategory', compact('products'));
    }

    public function changeCategoryPosition($slug, Request $request){
        // dd($slug);
        $category=Category::where('slug',$slug)->first();
        if ($category) {
            $category->category_position = $request->category_position;
            $category->update();

            return $this->response->responseSuccess($category->category_position,"Successfully Updated.");
        }
        return $this->response->responseError('Category Not Found', 400);
       
    }
}
