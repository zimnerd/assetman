<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;
use App\Models\Asset;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AssetController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $assets = Asset::all();
        Log::info($assets);

        return $this->sendResponse($assets, 'Assets retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAssetRequest $request
     * @return Response
     */
    public function store(StoreAssetRequest $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'image' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input['image'] = $this->saveFile($request->get('name'), $request->get('image'));
        Log::info($input);
        $asset = Asset::create($input);
        return $this->sendResponse($asset, 'Asset created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return Response
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetRequest  $request
     * @param  \App\Models\Asset  $asset
     * @return Response
     */
    public function update(UpdateAssetRequest $request, Asset $asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return Response
     */
    public function destroy(Asset $asset)
    {
        //
    }

    public function saveFile($name, $base64Image){
            $folderLocation  = 'public'.DIRECTORY_SEPARATOR.date('Ymd').DIRECTORY_SEPARATOR;
            $base64Image = explode(";base64,", $base64Image);
            $explodeImage = explode("image/", $base64Image[0]);
            $imageType = $explodeImage[1];
            $image_base64 = base64_decode($base64Image[1]);
            $file = $folderLocation.$name . '.'.$imageType;
            File::ensureDirectoryExists( $folderLocation);
            Storage::put($file, $image_base64);
            return $file;
    }
}
