<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Scene;

class SceneController extends Controller
{
    /**
     * Store a ad
     */
    public function store(Request $request)
    {
        //Rules
        $rules = [
            'scene_id' => 'required',
            'scene_title' => 'required',
            'description' => 'required'
        ];

        //Error messages
        $messages = [
            'scene_id' => 'A scene id is required',
            'scene_title' => 'A scene title is required',
            'description' => 'A game description is required'
        ];

        //Validate the data
        $validator = $this->validate($request, $rules, $messages);
        
        // Store the data 
        $scene = new scene;
        $scene->scene_id = $request->input('scene_id');
        $scene->scene_title = $request->input('scene_title');
        $scene->description = $request->input('description');
        $scene->game_id = $request->input('game_id');

        $scene->save();

        //Response message
        $response = [
            'success' => true,
            'data' => $scene,
            'message' => 'Scene text added successfully.'
        ];

        return response()->json($response, 200);
    }
}
