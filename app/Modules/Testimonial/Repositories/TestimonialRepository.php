<?php

namespace Testimonial\Repositories;

use Exception;
use Testimonial\Models\Testimonial;
use Files\Repositories\FileInterface;


class TestimonialRepository implements TestimonialInterface
{

    public $files;
    public function __construct(FileInterface $files)
    {
        $this->files = $files;
    }

    public function store($request)
    {       
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->status = $request->status;
        $testimonial->description = $request->description;
        if ($request->hasFile('image')) {
            $uploaded = $this->files->storeFile($request->image);
            if ($uploaded) {
                $testimonial->image_id = $uploaded->id;
            }
        }
        $testimonial->save();   
        return true;  
        
    }

    public function update($slug, $request)
    {
     
      
        $testimonial = Testimonial::where('slug', $slug)->first();
        $testimonial->name = $request->name;
        $testimonial->status = $request->status;
        $testimonial->description = $request->description;
        if ($request->hasFile('image')) {
            $uploaded = $this->files->storeFile($request->image);
            if ($uploaded) {
                $testimonial->image_id = $uploaded->id;
            }
        }
        $testimonial->update();           
        return $testimonial;
    }
    public function delete($slug)
    {
        $testimonial = Testimonial::where('slug', $slug)->first();
        if ($testimonial) {
            $testimonial->delete();
            return true;
        }
    }


    public function changestatus($request)
    {
        $category = Testimonial::where('id',$request->testimonial_id)->first();
        if($category){
            if ($category->status == "Active") {
                $category->status = "Inactive";
            } else {
                $category->status = "Active";
            }
            $category->update();
            return $category;
        }
        throw new Exception('Testimonial Not Found');
       
    }

}
