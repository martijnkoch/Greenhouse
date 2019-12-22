<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ad;
use Validator;

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
        //Rules
        $rules = [
            'gamename' => 'required',
            'scenenumber' => 'required',
            'clientname' => 'required',
            'file' => 'required|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
        ];

        //Error messages
        $messages = [
            'gamename' => 'A game name is required',
            'scenenumber' => 'A scene number is required',
            'clientname' => 'A client name is required',
            'file' => 'A file is required'
        ];

        //Validate the data
        $validator = $this->validate($request, $rules, $messages);

        //Handle file uoload
        $file = $request->file('file');
        //Get oroginal file nam
        $originalName = $file->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($originalName, PATHINFO_FILENAME);
        // Get the ext
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $file->storeAs('/videos', $fileNameToStore);
        $file_path = 'videos/';
        $file->move($file_path, $fileNameToStore);

        // Store the data 
        $ad = new Ad;
        $ad->gamename = $request->input('gamename');
        $ad->scenenumber = $request->input('scenenumber');
        $ad->clientname  = $request->input('clientname');
        $ad->file = $path;

        $ad->save();

        //Response message
        $response = [
            'success' => true,
            'data' => $ad,
            'message' => 'Ad stored successfully.'
        ];

        return response()->json($response, 200);
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
