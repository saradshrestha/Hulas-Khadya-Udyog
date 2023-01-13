<?php

namespace Testimonial\Http\Controllers\Admin;

use App\GlobalService\ResponseService;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Testimonial\Http\Requests\TestimonialRequest;
use Testimonial\Http\Requests\TestimonialUpdateRequest;
use Testimonial\Models\Testimonial;
use Testimonial\Repositories\TestimonialInterface;

class TestimonialController extends Controller
{
    public $testimonial, $response;
    public function __construct(TestimonialInterface $testimonial, ResponseService $response)
    {
        $this->testimonial = $testimonial;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $testimonials = Testimonial::paginate(10);
            return view('Testimonial::admin.index',compact('testimonials'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function create()
    {
        try {
            return view('Testimonial::admin.create');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function store(TestimonialRequest $request)
    {
        try {
  
            $this->testimonial->store($request);
            Toastr::success('Successfuly created.');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($slug){
        try {
            $testimonial =  Testimonial::where('slug',$slug)->first();
            if($testimonial){
                return view('Testimonial::admin.edit', compact('testimonial'));
            }
            Toastr::error('Testimonial Not Found');
            return redirect()->back();

        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(TestimonialUpdateRequest $request, $slug)
    {
        try {
            // dd($request->all());
            $testimonial =  $this->testimonial->update($slug, $request);
            if ($testimonial) {
                Toastr::success('Successfully Updated');
                return redirect()->route('admin.testimonial.index');
            }
            Toastr::error('Something Went Wrong');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error($e->getMessage(), 'Error');
            return redirect()->back();
        }
    }


    public function delete($slug)
    {
        try {
            $deletedcategory = $this->testimonial->delete($slug);
            if ($deletedcategory === true) {
                Toastr::success("Successfully Deleted.");
                return redirect()->back();
            } else {
                Toastr::error("Somethig Went Wrong.");
                return redirect()->back();
            }
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function changeStatus(Request $request)
    {
        try {
            $category = $this->testimonial->changestatus($request);
            if (!$category) {
                return $this->response->responseError('File not found!', 400);
            }
            return $this->response->responseSuccessMsg("Successfully Updated.");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage(), 400);
        }
    }
}
