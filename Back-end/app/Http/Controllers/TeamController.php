<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function getAllPlayers() {
        $clubs = Team::get()->toJson(JSON_PRETTY_PRINT);
        return response($clubs, 200);
    }

    public function getPlayerById($id) {
        if (Team::where('id', $id)->exists()) {
            $club = Team::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($club, 200);
        } else {
            return response()->json([
                'message' => 'Club is niet gevonden',
                'data' => $id,
                'status' => 404
            ], 404);
        }
    }

    public function createPlayer(Request $request) {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'number' => 'required',
            'position' => 'required',
        ]);

        $errors = $validation->errors();

        if ($validation->fails()) {
            return response()->json([
                'message' => $errors,
                'success' => false,
                'status' => 417
            ], 417);
        }

        $newPlayer = Team::create($request->all());

        return response()->json([
            'message' => "Speler is aangemaakt",
            'data' => $newPlayer,
            'success' => true,
            'status' => 201
        ], 201);
    }
}
