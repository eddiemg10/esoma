<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;


//This is the controller for the Regular User Views
class BlogController extends Controller
{
    //

    public function index(){
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();


        return view('blog.user.index')->withPosts($posts)->withCategories($categories)->withTags($tags);
    }

    public function show($id){
        $post = Post::find($id);
        $category = Category::find($post->category);
        $author = User::find($post->author);





        return view('blog.user.single')->withPost($post)->withCategory($category)->withAuthor($author);
    }
}
