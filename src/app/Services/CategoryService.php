<?php

namespace App\Services;

use App\Interfaces\CategoryInterface;
use App\Models\Category;


class CategoryService implements CategoryInterface
{
    public function getAllCategories()
    {
        return Category::all();
    }

    public function getCategoryById($id)
    {
        return Category::findOrFail($id);
    }

    public function createCategory($data)
    {
        return Category::create($data);
    }

    public function updateCategory($id, $data)
    {
        $category = $this->getCategoryById($id);
        $category->update($data);
        return $category;
    }

    public function deleteCategory($id)
    {
        $category = $this->getCategoryById($id);
        $category->delete();
        return $category;
    }

    public function getRootCategoriesWithChildren()
    {
        return Category::whereNull('parent_id')->with('childrenRecursive')->get();
    }
}
