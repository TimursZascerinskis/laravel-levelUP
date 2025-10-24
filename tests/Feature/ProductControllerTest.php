<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $product;

    protected function setUp(): void
    {
        parent::setUp();

        // Šī rinda izpildās pirms katra testa
        $this->product = Product::factory()->create();
    }

    public function test_it_can_show_a_product()
    {
        $response = $this->get("/products/{$this->product->id}/show");
        $response->assertStatus(200);
    }

    public function test_it_can_update_a_product()
    {
        $response = $this->put("/products/{$this->product->id}", [
            'name' => 'Updated Product',
            'quantity' => 42,
        ]);

        $response->assertRedirect("/products/{$this->product->id}/show");
    }

    /** @test */
    public function it_can_delete_a_product()
    {
        $product = Product::factory()->create();

        $response = $this->delete("/products/{$product->id}");

        $response->assertRedirect('/products/');
        $this->assertDatabaseMissing('products', ['id' => $product->id]);

    }

    /** @test */
    public function it_validates_product_creation()
    {
        $response = $this->post('/products', []);

        $response->assertSessionHasErrors(['name', 'quantity']);
    }
}
