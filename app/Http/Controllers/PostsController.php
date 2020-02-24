<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'document' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if ($request->hasFile('document')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('document')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('document')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename. '_'.time().'.'.$extension;

            $file = $request->file('document');

            // Get File Content
            $fileContent = $file->get();

            // Encrypt the Content
            $encryptedContent = encrypt($fileContent);

            // Store the encrypted Content
            Storage::put('public/documents/'.$fileNameToStore.'.dat', $encryptedContent);

            // Upload Image
            // $path = $request->file('document')->storeAs('public/documents', $encryptedContent);
        } else {
            $fileNameToStore = 'nodocument.jpg';
        }

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->document = $fileNameToStore;
        $post->save();

        return redirect('/upload')->with('success', 'Post Created');
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
