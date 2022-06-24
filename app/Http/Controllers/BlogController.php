<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;


//This is the controller for the Regular User Views
class BlogController extends Controller
{
    //

    public function index(Request $request){
        if ($request->search) {
            $posts = Post::where('content', 'like','%'.$request->search.'%')
                    ->orWhere('title', 'like', '%'.$request->search.'%')
                    ->get();

        }
        elseif ($request->category) {
            // code...
            $posts = Category::where('category', $request->category)->firstOrFail()->posts()->get();

        }elseif ($request->tag) {
            // code...
            $posts = Tag::where('tag', $request->tag )->firstOrFail()->posts()->get();  


        }
        else{

            $posts = Post::all();
        }
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
