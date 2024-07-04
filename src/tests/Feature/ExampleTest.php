<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    use RefreshDatabase;

    protected $categoryService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->categoryService = new CategoryService();
    }

    public function testGetAllCategoriesWithSubcategoryCount()
    {
        $parentCategory = Category::factory()->create();
        $childCategory = Category::factory()->create(['parent_id' => $parentCategory->id]);

        $categories = $this->categoryService->getAllCategoriesWithSubcategoryCount();

        $this->assertCount(2, $categories);
        $this->assertEquals(1, $categories->first()->subcategories_count);
    }

    public function testCreateCategory()
    {
        $request = new Request([
            'name' => 'New Category',
            'parent_id' => null,
        ]);

        $category = $this->categoryService->createCategory($request);

        $this->assertDatabaseHas('categories', ['name' => 'New Category']);
        $this->assertInstanceOf(Category::class, $category);
    }

    public function testUpdateCategory()
    {
        $category = Category::factory()->create(['name' => 'Old Category']);
        $request = new Request([
            'name' => 'Updated Category',
            'parent_id' => null,
        ]);

        $updatedCategory = $this->categoryService->updateCategory($request, $category);

        $this->assertDatabaseHas('categories', ['name' => 'Updated Category']);
        $this->assertTrue($updatedCategory);
    }

    public function testDeleteCategory()
    {
        $category = Category::factory()->create();

        $deleted = $this->categoryService->deleteCategory($category);

        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
        $this->assertTrue($deleted);
    }
}
