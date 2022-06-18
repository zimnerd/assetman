<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssetCategoryFormFieldRequest;
use App\Http\Requests\UpdateAssetCategoryFormFieldRequest;
use App\Models\AssetCategoryFormField;

class AssetCategoryFormFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreAssetCategoryFormFieldRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetCategoryFormFieldRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetCategoryFormField  $assetCategoryFormField
     * @return \Illuminate\Http\Response
     */
    public function show(AssetCategoryFormField $assetCategoryFormField)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetCategoryFormField  $assetCategoryFormField
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetCategoryFormField $assetCategoryFormField)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetCategoryFormFieldRequest  $request
     * @param  \App\Models\AssetCategoryFormField  $assetCategoryFormField
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetCategoryFormFieldRequest $request, AssetCategoryFormField $assetCategoryFormField)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetCategoryFormField  $assetCategoryFormField
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetCategoryFormField $assetCategoryFormField)
    {
        //
    }
}
