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

            $fileName = $request->file('image')->hashName();
            $extension = $request->file('image')->extension();


            if ($request->file('image')->move(public_path('images/blog'), $fileName)) {
                echo "Done";
            }else
            {
                echo "Failed";
            }
        
            $img_location = 'images/blog/'.$fileName;         


            $post = new Post;

            $post->author = 1;
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->image = $fileName;
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
        $category = Category::find($post->category);
        $author = User::find($post->author);

        return view('blog.posts.single')->withPost($post)->withCategory($category)->withAuthor($author);
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

        
        $postTags = [];
        foreach ($post->tags as $tag) {
            // code...
            $postTags[] = $tag->id;
        }

        return view('blog.posts.edit')->withPost($post)->withCategories($categories)->withTags($tags)->withPostTags($postTags);

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

       // dd($request); 
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',

            'content' => 'required',
            'tags' => 'required',
            'category' =>'required|integer',
            ]); 
        echo "<pre>";
        
        $post = Post::find($id);

    

        if (isset($request->image)) {
            // code...
            

            $fileName = $request->file('image')->hashName();
            $extension = $request->file('image')->extension();

            echo "<br>\n";
           

            echo $fileName;



            if ($request->file('image')->move(public_path('images/blog'), $fileName)) {
                    echo "Done";
            }

            $img_location = 'images/blog/'.$fileName;

            $post->image = $fileName;
        }

            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->content = $request->content;
            $post->category = $request->category;
            $post->save();

            
            $post->tags()->sync($request->tags);                    



            if($post)
            {
                
                return redirect()->route('blog.posts.show',$id);
            }else{
                return redirect()->back()->with('status', 'Post Update Failed');
            }        






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
