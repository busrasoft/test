<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\BookCase;
use Tests\TestCase;

class BookTest extends TestCase
{
    public function a_book_can_be_added_to_the_library()
    {
        $this->withExceptionHandling();
        
        $response = $this->post('/books', [
            'title' => 'cool book title',
            'author' => 'victot hugo',
        ]);

        $response->assertOk();
        $this->assertCount(1, Book::all());
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
