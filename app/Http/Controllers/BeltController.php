<?php

namespace App\Http\Controllers;

use App\Models\Belt;
use App\Http\Controllers\ApiController;
use App\Http\Requests\BeltStoreRequest;
use App\Http\Requests\BeltUpdateRequest;

class BeltController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $belts = Belt::all();

        return $this->showResponse($belts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BeltStoreRequest $request)
    {
        $belt = Belt::create($request->all());

        return $this->showResponse($belt);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $belt = Belt::findOrFail($id);

        return $this->showResponse($belt, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BeltUpdateRequest $request, string $id)
    {
         $belt = Belt::findOrFail($id);

         $belt->update($request->all());

         $this->showResponse($belt, 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $belt = Belt::findOrFail($id);

        $belt->delete();

        $this->showResponse($belt, 204);
    }
}
