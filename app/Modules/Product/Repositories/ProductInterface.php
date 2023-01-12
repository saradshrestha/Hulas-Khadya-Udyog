<?php

namespace Product\Repositories;

interface ProductInterface{
    public function allproducts();

    public function getProductBySlug($slug);

    public function getProductById($id);

    public function getProductCategoryById($id, $request);

    public function store($request);

    public function update($slug, $request);

    public function delete($id);

    public function getCategories();

    public function getQuantityTypes();

    public function uploadImage($request);

    public function deleteimage($request);

    public function changestatus($request);

    public function changeFeature($request);

    public function searchProduct($request);

    public function ProductByPrice($request);

    public function getProductBySlugWithMeta($slug);

    public function getProductByCategoryID($id);


}
