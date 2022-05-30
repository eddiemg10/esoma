<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 1 should be userId for usr currently logged in 
       

        $posts = User::find(1)->posts()->paginate(10);

       /* echo "<pre>";
        print_r($posts);
        echo "</pre>";*/

        return view('blog.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $tags = Tag::all();

        return view('blog.posts.create')->withTags($tags)->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|max:255|unique:posts,slug',
                'image' => 'required',
                'content' => 'required',
                'tags' => 'required',
                'category' =>'required|integer',


            ]);


            echo "<pre>";
                print_r($request->tags);
            echo "</pre>";

            $originName = $request->file('image')->getClientOriginalName();

            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;


            if ($request->file('image')->move(public_path('images'), $fileName)) {
                echo "Done";
            }else
            {
                echo "Failed";
            }
        
            $img_location = 'images/'.$fileName;         


            $post = new Post;

            $post->author = 1;
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->image = $img_location;
            $post->content = $request->content;
            $post->category = $request->category;
            $post->published = false;

            $post->save();

            $post->tags()->attach($request->tags);


            if($post)
            {
                
                return redirect()->route('blog.posts.index');
            }else{
                return redirect()->back()->with('status', 'Post Creation Failed');
            }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);

        return view('blog.posts.single')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('blog.posts.edit')->withPost($post)->withCategories($categories)->withTags($tags);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
