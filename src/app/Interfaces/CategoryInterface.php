<?php

namespace App\Interfaces;

interface CategoryInterface{
    public function getAllCategories();
    public function getCategoryById($id);
    public function createCategory($data);
    public function updateCategory($id, $data);
    public function deleteCategory($id);
    public function getRootCategoriesWithChildren();
}
