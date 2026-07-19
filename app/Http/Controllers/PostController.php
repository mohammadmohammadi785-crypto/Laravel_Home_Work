<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('images')->get();
        return view('Post.index')->with("posts", $posts);
    }
    public function create(Request $request)
    {
        $request->validate([
            "title"=> "required|string|min:3",
            "body"=> "required|string|min:10",
            "image1"=> "required|image|mimes:png,jpg,jpeg,svg,gif",
            "image2"=> "required|image|mimes:png,jpg,jpeg,svg,gif",
        ]);
        $post = Post::create([
            "title"=> $request->title,
            "body"=> $request->body,
        ]);
        $imageUrl1 = null;
        $imageUrl2 = null;
        if($request->hasFile("image1") && $request->hasFile("image2")){
            $imageUrl1 = $request->file("image1")->store("post_images", "public");
            $imageUrl2 = $request->file("image2")->store("post_images", "public");
            $post->images()->createMany(
                [
                    ["image_url"=>$imageUrl1],
                    ["image_url"=>$imageUrl2],
                ]
            );
        }
        return redirect('/Post');
    }

    public function edit(String $id){
        $post = Post::findOrFail($id);
        return view('Post.update')->with('post', $post);
    }
    public function update(Request $request, String $id){
        $post = Post::findOrFail($id);
        $request->validate([
            "title"=> "required|string|min:8",
            "body"=> "required|string|min:10",     
        ]);
        $post->update([
            "title"=> $request->title,
            "body"=>$request->body,
        ]);
        return redirect('/Post');
    }
}
