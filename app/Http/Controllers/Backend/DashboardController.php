<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\GobalPost;
use Category\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Product\Models\Product;

class DashboardController extends Controller
{

    public function index(){
        $allproducts = Product::limit(10)->active()->latest()->get();
        $categories = Category::limit(10)->active()->latest()->withCount('products')->get();

        return view('admin.dashboard',compact('allproducts','categories'));
    }


    public function search(Request $request){

        $query = $request->search;
        if ($query){
            $posts = GobalPost::where('title', 'LIKE', "%{$query}%")->paginate(10);
        }else{
            $posts = GobalPost::where('id', 0)->paginate(10);
        }

        return view('admin.extra.search', compact('posts'));
    }



    public function clearview(){

        try{
            Artisan::call('view:clear');
            return redirect()->back()->with('success', 'View Cache Successfully Clear.');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Somethings went errors!!!');
        }
    }

    public function clearconfig(){

        try{
            Artisan::call('config:cache');
            return redirect()->back()->with('success', 'Config Cache Successfully Clear.');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Somethings went errors!!!');
        }
    }

    public function clearcache(){

        try{
            Artisan::call('cache:clear');
            return redirect()->back()->with('success', 'Cache Successfully Clear.');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Somethings went errors!!!');
        }
    }





}
