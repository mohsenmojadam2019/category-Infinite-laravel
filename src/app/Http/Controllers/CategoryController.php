<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Interfaces\CategoryInterface;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getRootCategoriesWithChildren();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('categories.create', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $this->categoryService->createCategory($request->validated());

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        $categories = $this->categoryService->getAllCategories();
        return view('categories.edit', compact('category', 'categories'));
    }

    public function update(CategoryRequest $request, $id)
    {


        $this->categoryService->updateCategory($id, $request->validated());

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);

        return redirect()->route('categories.index');
    }
}
