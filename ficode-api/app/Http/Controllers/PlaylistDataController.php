<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaylistDataRequest;
use App\Http\Resources\PlaylistDataResource;
use App\Models\PlaylistData;
use Illuminate\Http\Request;

class PlaylistDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get = PlaylistDataResource::collection(PlaylistData::all());
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
    public function store(PlaylistDataRequest $request)
    {
        $store = PlaylistData::create($request->validated());
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
    public function show(PlaylistData $playlist_datum)
    {
        return response()->json([
            'status' => 200,
            'data' => new PlaylistDataResource($playlist_datum)
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
    public function update(PlaylistDataRequest $request, PlaylistData $playlist_datum)
    {
        $update = $playlist_datum->update($request->validated());

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
        return PlaylistData::destroy($id) ? response()->json([
            'status' => 200,
            'message' => 'berhasil dihapus'
        ], 200) : response()->json([
            'status' => 400,
            'message' => 'gagal dihapus'
        ], 400);
    }
}
