<?php

namespace App\Http\Controllers\Api;

use App\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
    * Display all games
     */
    public function index()
    {
        return Game::all();
    }

    /**
    * Display the 3 most popular games 
     */
    public function mostPopular()
    {
        $games = Game::withCount('ads')->orderBy('ads_count', 'desc')->take(3)->get();
        return response($games, 200);
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
     * Post a new game
     */
    public function store(Request $request)
    {
        // Required data
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
  
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
        
        // Create the new game
        $game = new Game;
        $game->name = $request->input('name');
        $game->image = $path;

        $game->save();

        //Response message
        $response = [
            'success' => true,
            'data' => $game,
            'message' => 'Game stored successfully.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show single game
     */
    public function show($id)
    {
        if (Game::where('id', $id)->exists()) {
            $game = Game::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($game, 200);
          } else {
            return response()->json([
                "message" => "Game not found"
            ], 404);
          }
    }

    /**
     * Show ads for a game with scenenumber 1 
     */
    public function showAdsOne($id)
    {
        if (Game::where('id', $id)->exists()) {
            $ad = Game::find($id)->ads->where('scenenumber', 1)->toJson(JSON_PRETTY_PRINT);
            return response($ad, 200);
        } else {
            return response()->json([
                "message" => "Game not found"
            ], 404);
        }
    }

    /**
     * Show ads for a game with scenenumber 2 
     */
    public function showAdsTwo($id)
    {
        if (Game::where('id', $id)->exists()) {
            $ad = Game::find($id)->ads->where('scenenumber', 2)->toJson(JSON_PRETTY_PRINT);
            return response($ad, 200);
        } else {
            return response()->json([
                "message" => "Game not found"
            ], 404);
        }
    }

     /**
     * Show ads for a game with scenenumber 2 
     */
    public function showAdsThree($id)
    {
        if (Game::where('id', $id)->exists()) {
            $ad = Game::find($id)->ads->where('scenenumber', 3)->toJson(JSON_PRETTY_PRINT);
            return response($ad, 200);
        } else {
            return response()->json([
                "message" => "Game not found"
            ], 404);
        }
    }
    /**
     * Edit a game
     */
    public function edit(Request $request, $id)
    {
        $game = Game::findOrFail($id);
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
        $game = Game::findOrFail($id);
    }

    /**
     * Delete a game
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return response()->json(["message" => "Game deleted succesfully"], 204);
    }
}
