<?php

namespace App\Http\Controllers\Api;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =Post::all();

        return response()->json([
        'massage'=>$posts
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title'=> [
        'required',
        'min:10',
        'max:40',
        'regex:/^[\p{Arabic}\s]+$/u'
    ],
            'content'=>'required',
            
        ]);
        $post = Post::create($validate);

          return response()->json([
        'data'=>$post
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

         return response()->json([
        'data'=>$post
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
if(!$post){
  return response()->json([
        'data'=>'Noooooot Found' ],500); 
}

          $validate = $request->validate([
            'title'=> [
        'required',
        'min:10',
        'max:220',
        'regex:/^[\p{Arabic}\s]+$/u'
    ],
            'content'=>'required',
            
        ]);
        $post->update($validate);

             return response()->json([
        'data'=>$post
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
 public function destroy(string $id)
{
    $post = Post::findOrFail($id);

    $post->delete();

    return response()->json([
        'success' => true,
        'message' => 'Row deleted successfully'
    ]);
}



 public function search(string $key)
{
    $posts = Post::where('title', 'LIKE', "%{$key}%")
             ->orWhere('content', 'LIKE', "%{$key}%")
                ->get();

    return response()->json([
        'success' => true,
        'data' => $posts
    ]);
}



}