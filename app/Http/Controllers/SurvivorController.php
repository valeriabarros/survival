<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survivor;

class SurvivorController extends Controller
{
    public function index()
    {
    	return Survivor::all();
    }

    public function show($id)
    {
    	return Survivor::find($id);
    }

    public function store(Request $request)
    {
    	$survivor = Survivor::create($request->all());

    	return response()->json($survivor, 201);
    }

    public function update(Request $request, Survivor $survivor)
    {
    	$survivor->update($request->all());

    	return response()->json($survivor, 200);
    }

    public function delete(Survivor $survivor)
    {
    	$survivor->delete();

    	return response()->json(null, 204);
    }
}
