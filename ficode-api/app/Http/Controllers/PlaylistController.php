<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaylistRequest;
use App\Http\Resources\PlaylistResource;
use App\Models\Playlist;
use App\Models\Post;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get = PlaylistResource::collection(Playlist::all()->load('playlistDatas'));
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
    public function store(PlaylistRequest $request)
    {
        $validated = $request->validated();
        $validated['image'] =  $request->file('image')->store('image_post');

        $store = Playlist::create($validated);

        return $store ? response()->json([
            'status' => 200,
            'message' => 'berhasil upload',
            'data' => $store,
        ], 200) : response()->json([
            'status' => 400,
            'message' => 'gagal upload',
            'data' => null,
        ], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        return response()->json([
            'status' => 200,
            'data' => new PlaylistResource($playlist)
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
    public function update(PlaylistRequest $request, Playlist $playlist)
    {
        $validated = $request->validated();
        if ($request->get('image')) {
            $validated['image'] =  $request->file('image')->store('image_post');
        }
        $update = $playlist->update($validated);

        return $update ? response()->json([
            'status' => 200,
            'message' => 'berhasil update'
        ], 200) : response()->json([
            'status' => 400,
            'message' => 'gagal update'
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
        return Playlist::destroy($id) ? response()->json([
            'status' => 200,
            'message' => 'berhasil dihapus'
        ], 200) : response()->json([
            'status' => 400,
            'message' => 'gagal dihapus'
        ], 400);
    }
}
