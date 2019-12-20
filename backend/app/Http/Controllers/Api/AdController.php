<?php

namespace App\Http\Controllers\Api;

use App\Ad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdController extends Controller
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
     * Store a ad
     */
    public function store(Request $request)
    {
        // Required data
        $this->validate($request, [
            'gameName' => 'required',
            'sceneNumber' => 'required',
            'clientName' => 'required',
            'fileName' => 'required'
        ]);
        /*
        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }
       
        //Get oroginal file name
        $originalName = $file->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($originalName, PATHINFO_FILENAME);
        // Get the ext
        $extension = $file->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Path to store 
        $path = $file->storeAs('/images', $fileNameToStore);
        $file_path = 'images/';
        // Move the image
        $file->move($file_path, $fileNameToStore);
        */
        // Create the new game
        $ad = new Ad;
        $ad->name = $request->input('gameName');
        $ad->name = $request->input('sceneNumber');
        $ad->name = $request->input('clientName');
        $ad->name = $request->input('fileName');

        $ad->save();

        return $ad;
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
