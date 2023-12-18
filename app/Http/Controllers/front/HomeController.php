<?php

namespace App\Http\Controllers\front;

use App\GlobalService\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreCareerRequest;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Model\Career;
use App\Model\Contact;
use App\Model\GobalPost;
use App\Repositories\FrontCms\CmsInterface;
use Brian2694\Toastr\Facades\Toastr;
use Category\Models\Category;
use Exception;
use Files\Repositories\FileInterface;
use Illuminate\Http\Request;
use Product\Models\FinishedProduct;
use Product\Models\Product;
use Team\Models\Team;
use Testimonial\Models\Testimonial;

class HomeController extends Controller
{
    protected $cms,$response,$files;
    public function __construct(CmsInterface $cms,FileInterface $files, ResponseService $response)
    {
        $this->cms = $cms;
        $this->files = $files;
        $this->response = $response;
    }

    public function index()
    {
        $products = Product::active()->limit(6)->latest()->get();
        $recipes = FinishedProduct::limit(6)->latest()->get();
        $banners = $this->cms->getGlobalPostByID(1);
        $testimonials = Testimonial::latest()->limit(6)->get();
        $teams = Team::orderBy('position','ASC')->get();
        return view('front.index', compact( 'products','banners','recipes','testimonials','teams'));
    }


    public function productSingle($slug){
       $product = Product::active()
                    ->where('slug',$slug)
                    ->with(['seoable', 'productMeta','images','finishedProducts','category'])
                    ->first();
        
        $relatedProducts = Product::where('category_id',$product->category_id)
                            ->where('id','!=',$product->id)
                            ->with('category')->limit(8)->get();
        // dd($product);
        $categories = Category::active()->get();
        return view('front.product.single.productDetails', compact('product','relatedProducts'));
    }


    public function getProduct(Request $request){
        $categories = Category::active()->get();
        $products = Product::active()->orderByPosition()->with(['seoable', 'productMeta']);
      
        if($request->ajax()){
            // dd($request->all());
            if($request->search != null){
                $products = $products->where('title','LIKE','%'.$request->search.'%');
            } 
            if($request->filter != null && $request->filter != "All"){
                $category = Category::where('id',$request->filter)->first();
                $categoryId = $category->id;
                $products = $products->where('category_id',$categoryId);
            }  
            $products = $products->paginate(8);
            $data = [
                'view' => view('front.product.products.productsappend',compact('products'))->render(),
            ];
            return $this->response->responseSuccess($data,"Success",200); 

        }else{
            $products = $products->paginate(8);
        }

        return view('front.product.products.products', compact('products','categories'));
    }

    public function recipeSingle($slug){
        $recipe = FinishedProduct::where('slug',$slug)
                     ->with(['seoable','products'])
                     ->first();
        $recipe_id = $recipe->id;
        $recentRecipes = FinishedProduct::where('id','!=',$recipe_id)
                                            ->limit(6)->get();  
        $productIds =  $recipe->products()->pluck('product_id')->toArray();
        $relatedProducts = FinishedProduct::whereHas('products', function($q) use ($productIds){
                            $q->whereIn('product_id',$productIds);
                        })
                        ->with('products')
                        ->where('id','!=',$recipe_id)
                        ->limit(8)->get();


         return view('front.recipe.single.recipeDetails', compact('recipe','recentRecipes','relatedProducts'));
     }
 
 
     public function getRecipe(Request $request){
        $categories = Category::active()->get();
        $recipes = FinishedProduct::with(['seoable','products']);
       
        if($request->ajax()){

            if($request->search != null){
                $recipe = $recipes->where('title','LIKE','%'.$request->search.'%');
            } 
            if($request->filter != null && $request->filter != "All"){
                $category = Category::where('id',$request->filter)->first();
                $categoryId = $category->id;
                $recipes = $recipe->where('category_id',$categoryId);
            }  
            $recipes = $recipes->paginate(2);
            $data = [
                'view' => view('front.recipe.recipe.recipesappend',compact('recipes'))->render(),
            ];
            return $this->response->responseSuccess($data,"Success",200); 

        }else{
            $recipes = $recipes->paginate(2);
        }

        return view('front.recipe.recipe.recipes', compact('recipes'));
    }



    public function productsByCategory($slug, Request $request){   
        $category = Category::where('slug',$slug)->first();
        if($category){
            $categoryId = $category->id;
            if($category->has('children') && $category->children()->count() > 0){
                $products = Product::whereHas('category', function($q) use ($categoryId){
                        $q->where('parent_id',$categoryId);
                });
            }else{
                $products = Product::where('category_id',$categoryId);
            }
           
            if($request->ajax()){
                if($request->search != null){
                    $products = $products->where('title','LIKE','%'.$request->search.'%');
                } 
                if($request->filter != null && $request->filter != "All"){
                    $categoryId = $category->id;
                    if($category->has('children') && $category->children()->count() > 0){
                        $products = Product::whereHas('category', function($q) use ($categoryId){
                            $q->where('parent_id',$categoryId);
                        });
                    }else{  
                        $products = $products->where('category_id',$categoryId);
                    }
                    // $products = $products->where('category_id',$request->filter);
                }  
                $products = $products->orderByPosition()->paginate(12);
                $data = [
                    'view' => view('front.product.products.productsappend',compact('products','category'))->render(),
                ];
                return $this->response->responseSuccess($data,"Success",200); 
            }
            $products = $products->orderByPosition()->paginate(12);

            return view('front.product.categoryProducts.productsByCategory',compact('products','category'));  
        }
        Toastr::error("Category Not Found");
        return redirect()->back();
    }
    
    public function getBlogs(){
        $blogs = GobalPost::where('post_type', 3)
            ->where('status', 'Active')
            ->orderBy('position', 'ASC')->with(['seoable', 'postMetas','author'])
            ->latest()
            ->paginate(10);
           
        return view('front.blog.blog', compact('blogs'));
    }


    public function getBlogsDetails($slug) {
        $blog = $this->cms->getgobalPostBySlug($slug);
        $blogs = GobalPost::where('post_type', 3)
                ->where('status', 'Active')
                ->where('slug','!=',$slug)
                ->orderBy('position', 'ASC')->with(['seoable', 'postMetas','author'])
                ->limit(5)->get();
        return view('front.blog.blogdetails', compact('blog','blogs'));
    }


    public function getNews() {
        $news = GobalPost::where('post_type', 10)
            ->where('status', 'Active')
            ->with(['seoable', 'postMetas','author'])->latest()
            ->paginate(10);
        // dd($news);

        return view('front.news.news', compact('news'));
    }


    public function getNewsDetails($slug){
        $singleNews = $this->cms->getgobalPostBySlug($slug);
        $news = GobalPost::where('post_type', 10)
                ->where('status', 'Active')
                ->where('slug','!=',$slug)
                ->with(['seoable', 'postMetas','author'])
                ->limit(5)->get();
        // dd($news);
                
        return view('front.news.newsdetails', compact('singleNews','news'));
    }


    public function getContact(){
        return view('front.contact.contact');
    }

    public function submitContact(StoreContactRequest $request){
        $contact = Contact::create($request->only(['name', 'email', 'phone', 'message']));
        if ($contact) {
            Toastr::success('We will contact you soon.', 'Thank you for your submission!');
            return redirect()->back();
        } else {
            Toastr::error('Please Try Again Later', 'Failed to Submit');
            return redirect()->back();
        }
    }

    public function getCareer(){
        return view('front.career.career');
    }

    public function submitCareer(StoreCareerRequest $request){
        // dd($request->all());
        $career = new Career();
        $career->name = $request->name;
        $career->email = $request->email;
        $career->phone = $request->phone;
        if ($request->hasFile('upload_file')) {
            $uploaded = $this->files->storeFile($request->image);
            if ($uploaded) {
                $career->file_id = $uploaded->id;
            }
        }

        if ($career->save()) {
            Toastr::success('We will contact you soon.', 'Thank you for your submission!');
            return redirect()->back();
        } else {
            Toastr::error('Please Try Again Later', 'Failed to Submit');
            return redirect()->back();
        }
    }


    public function aboutUs(){
        $testimonials = Testimonial::latest()->limit(6)->get();
        $teams = Team::orderBy('position','ASC')->get();
        return view('front.about.about', compact('testimonials','teams'));
    }

    public function privacyPolicy(){
        $policy = $this->cms->getgobalPostBySlug('privacy-policy');
        if($policy == null){
            return redirect()->back();
        }
        return view('front.privacyPolicy', compact('policy'));
    }

    public function termsConditions(){
        $termsCondition = $this->cms->getgobalPostBySlug('terms-conditions');
        if($termsCondition == null){
            return redirect()->back();
        }
        return view('front.termsConditions', compact('termsCondition'));
    }

    public function warranty(){
        $warranty = $this->cms->getgobalPostBySlug('warranty');
        if($warranty == null){
            return redirect()->back();
        }
        return view('front.warranty', compact('warranty'));
    }

    public function productsManuals(){
        try{
            $categories = Category::active()->parentCatrgories()->get();
            return view('front.product.products.productsManual',compact('categories'));
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function subCategoryManual(Request $request){
        try {
            $subCategories = Category::where('parent_id', $request->id)->select(["title", "id"])->get();
            return response()->json($subCategories);
        } catch (Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    public function subCategoryProductsManual(Request $request){
        try {
            $products = Product::where('category_id', $request->id)->get();
            // dd($products);
            return response()->json($products);
        } catch (Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    public function getProductManual(Request $request){
        try {
            // dd($request->all());
            if($request->value){
                $product = Product::select('id','title','manual_pdf_id')->where('title', $request->product)->first();

            }else{
                $product = Product::select('id','title','manual_pdf_id')->where('id', $request->id)->first();
            }
            
            if($product){
                if( $product->manual_pdf_id == null){
                    $product->newPdf= false;
                }else{
                    $product->newPdf= getOrginalUrl($product->manual_pdf_id);
                }
               
                return response()->json($product,200);
            }
            return response()->json('Product Not Found',404);
        } catch (Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }


    public function redirectToDarazSkyworth(){
        return redirect()->away('https://www.daraz.com.np/shop/skyworth/');
        // return redirect()->url('www.daraz.com/skyworth');
    }

}
