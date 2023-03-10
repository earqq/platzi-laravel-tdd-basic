<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tag;

class HomeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test a empty view
     *
     * @return void
     */
    public function test_empty()
    {
        $this
            ->get('/')
            ->assertStatus(200)
            ->assertSee('No hay etiquetas');
    }
      /**
     * To test view with data
     * @return void
     */
    public function test_with_data()
    {
        $tag  = Tag::factory()->create();
        $this->assertNotEmpty($tag->name);
        $this
            ->get('/')
            ->assertStatus(200)
            ->assertSee($tag->name)
            ->assertDontSee('No hay etiquetas');
    }
}
