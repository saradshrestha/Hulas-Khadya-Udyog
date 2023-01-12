<?php

namespace Testimonial\Repositories;

interface TestimonialInterface {
    public function store( $request);

    public function update($slug, $request);

    public function delete($id);

    public function changestatus($request);

   
}
