<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get = PostResource::collection(Post::all()->load('user', 'playlist', 'category'));

        return response()->json([
            'status' => 200,
            'data' => count($get) > 0 ? $get : 'data kosong'
        ], 200);
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
    public function store(PostRequest $request)
    {
        $validated =  $request->validated();
        $validated['image_cover'] = $request->file('image_cover')->store('image_post');

        $store = Post::create($validated);
        return $store ? response()->json([
            'status' => 200,
            'message' => 'berhasil tambah data',
            'data' => $store
        ], 200) : response()->json([
            'status' => 400,
            'message' => 'gagal tambah data',
            'data' => null
        ], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return response()->json([
            'status' => 200,
            'data' => new PostResource($post->load('user', 'playlist', 'category'))
        ], 200);
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
    public function update(PostRequest $request, Post $post)
    {
        $validated = $request->validated();
        if ($validated['image_cover']) {
            $validated['image_cover'] = $request->file('image_cover')->store('image_post');
        }
        $update = $post->update($validated);

        return $update ? response()->json([
            'status' => 200,
            'message' => 'berhasil diupdate'
        ], 200) : response()->json([
            'status' => 400,
            'message' => 'gagal diupdate'
        ], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Post::destroy($id) ? response()->json([
            'status' => 200,
            'message' => 'berhasil dihapus'
        ], 200) : response()->json([
            'status' => 400,
            'message' => 'gagal dihapus'
        ], 400);
    }
}
