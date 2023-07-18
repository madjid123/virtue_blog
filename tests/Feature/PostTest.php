<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Ramsey\Collection\Map\AssociativeArrayMap;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use HasFactory;
    protected $sample_post = [
        "title"=> "test blog",
        "author" => "madjid",
        "content" => "this is a sample test."
    ];
    protected $user ;
    
    public function test_example(): void
    {
        $response = $this->post('/posts/create',$this->sample_post);

        $response->assertStatus(302);
    }
    public function test_edit_post():void 
    {   
        $user = User::factory(User::class)->make();
        $post = Post::factory(Post::class)->make();
        $this->actingAs($user)->post(`/posts/$post->id/create`,$post->toArray());
        $post->content ="modfied";
        $response = $this->actingAs($user)->post(`/posts/$post->id/edit`,$post->toArray());
        
        $response->assertStatus(302);
        
    }
}