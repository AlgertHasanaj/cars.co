<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;
use App\Models\whyUs;

class whyUsTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_whyUs()
    {
        $post = whyUs::create([
            'title' => 'My First Post',
            'content' => 'This is the content of my first post.'
        ]);

        $this->assertDatabaseHas('posts', [
            'title' => 'My First Post',
            'content' => 'This is the content of my first post.'
        ]);
    }
}
