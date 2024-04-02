<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Http\Controllers\ApiController;
use App\Http\Requests\AtheleteStoreRequest;
use App\Http\Requests\AtheleteUpdateRequest;

class AthleteController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $athletes = Athlete::with('belt')->get();

        return $this->showResponse($athletes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AtheleteStoreRequest $request)
    {
        $athlete = Athlete::create($request->all());

        return $this->showResponse($athlete, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $athlete = Athlete::findOrFail($id)->with('belt');

        return $this->showResponse($athlete);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AtheleteUpdateRequest $request, string $id)
    {
        $athlete = Athlete::findOrFail($id);

        $athlete->update($request->all());

        return $this->showResponse($athlete, 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $athlete = Athlete::findOrFail($id);

        $athlete->delete();

        return $this->showResponse($athlete, 204);
    }
}
