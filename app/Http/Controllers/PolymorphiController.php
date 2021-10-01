<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\comment;

class PolymorphiController extends Controller
{
    public function index()
    {
        $category = Category::find(1);
        $comments = $category->comments()->get();

        echo "<b>{$category->title}</b><br>";

        foreach ($comments as $comment) {
            echo "<hr> {$comment->description}";
        }
    }

    public function insert()
    {
//        $post = Post::find(4);
        $post = Category::find(1);

        $comment = $post->comments()->create([
            'description' => 'minha nova descrição... foda-se - '.now()
        ]);

        dd($comment->description);
    }
}
