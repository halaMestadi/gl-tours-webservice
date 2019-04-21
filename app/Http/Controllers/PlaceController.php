<?php

namespace App\Http\Controllers;

use App\Place;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $places = Place::all();
        return response()->json($places);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'picture' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $place = Place::create($request->all());

        return response()->json([
            'message' => 'Great success! New place created',
            'place' => $place
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Place $place
     * @return Response
     */
    public function show(Place $place)
    {
        return response()->json($place);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Place $place
     * @return Response
     */
    public function update(Request $request, Place $place)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'picture' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $place->update($request->all());

        return response()->json([
            'message' => 'Great success! The place updated',
            'place' => $place
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Place $place
     * @return Response
     * @throws Exception
     */
    public function destroy(Place $place)
    {
        $place->delete();

        return response()->json([
            'message' => 'Successfully deleted a place!'
        ]);
    }
}
