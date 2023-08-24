<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_contains_non_empty_tables()
    {
        Product::create([
            'name' => 'Product 1',
            'price' => 123,
            'description' => 'abcabc'
        ]);
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee(value:'Product 1');
    }
}
