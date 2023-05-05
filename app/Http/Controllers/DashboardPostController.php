<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
// use Path\To\DOMDocument;
use DOMDocument;
use Intervention\Image\ImageManagerStatic as Image;

class DashboardPostController extends Controller
{
    public function index() {
        return view('dashboard.posts.index', [
            'title' => 'Artikel Blog',
            'posts' => Post::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.posts.create', [
            "title" => "Tambah Artikel",
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('post->images');
        $validatedData = $request->validate([
            'title' =>  'required|max:255',
            'slug'  =>  'required|unique:posts',
            'category_id'   =>  'required',
            'image' => 'image|file|max:1024',
            'source' =>  'nullable',
            'copyright' =>  'nullable',
            'body' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post->images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 400);

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            "title" => "Preview Artikel",
            'post'  => $post
        ]);
    }

    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            "title" => "Edit Artikel",
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' =>  'required|max:255',
            'category_id'   =>  'required',
            'image' => 'image|file|max:1024',
            'source' =>  'nullable',
            'copyright' =>  'nullable',
            'body' => 'required'
        ];

        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);


        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post->images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 400);

         Post::where('id', $post->id)->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Artikel berhasil diperbaharui!');
    }


    public function destroy(Post $post)
    {
        if($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Artikel berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
    
    public function upload(Request $request) {
        $image = $request->file('upload');
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();

        $imageName = $fileName . '-' . time() . '.' . $extension;
        $path = $request->file('upload')->storeAs('uploads', $imageName);
        $url = Storage::url($path);
        
        return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
    }
}
