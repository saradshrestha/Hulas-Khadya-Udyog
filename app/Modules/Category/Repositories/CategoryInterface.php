<?php

namespace Category\Repositories;

interface CategoryInterface {
    public function allcategories();
    
    public function getcategory($slug);

    public function getCategoryById($id);

    public function store( $request);

    public function update($slug, $request);

    public function delete($id);

    public function getparentcategories();

    public function changestatus($request);

    public function changefeatured($request);

    public function getproductbycategory($id);
}
