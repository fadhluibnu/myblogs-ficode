<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Http\Requests\StoreImageRequest;
use App\Http\Resources\ImageResource;
use App\Models\Image;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get = ImageResource::collection(Image::where('hidden', false)->get());

        return response()->json([
            'status' => 200,
            'data' => $get ? $get : 'data kosong'
        ],200);
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
    public function store(ImageRequest $request)
    {
        $validated = $request->validated();
        $validated['url'] = $request->file('url')->store('image_post');

        $store = Image::create($validated);

        
        return $store ? response()->json([
            'status' => 200,
            'message' => 'berhasil tambah data',
            'data' => $store
        ],200) : response()->json([
            'status' => 400,
            'message' => 'gagal tambah data',
            'data' => null
        ],400);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return response()->json([
            'status' => 200,
            'data' => new ImageResource($image)
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
    public function update(ImageRequest $request, Image $image)
    {
        $update = $image->update($request->validated());
        return $update ? response()->json([
            'status' => 200,
            'message' => 'berhasil diubah'
        ], 200) : response()->json([
            'status' => 400,
            'message' => 'gagal diubah'
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
        return Image::destroy($id) ? response()->json([
            'status' => 200,
            'message' => 'berhasil dihapus'
        ], 200) : response()->json([
            'status' => 400,
            'message' => 'gagal dihapus'
        ], 400);
    }
}
