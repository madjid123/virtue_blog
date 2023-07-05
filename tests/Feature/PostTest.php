<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Ramsey\Collection\Map\AssociativeArrayMap;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    protected $sample_post = [
        "name="> "test blog",
        "author" => "madjid",
        "content" => "this is a sample test."
    ];
    public function test_example(): void
    {
        $response = $this->post('/api/posts/create',$this->sample_post);

        $response->assertStatus(200);
    }
}
