<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Http\Controllers\ApiController;
use App\Http\Requests\AcademyStoreRequest;
use App\Http\Requests\AcademyUpdateRequest;

class AcademyController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academies = Academy::all();

        return $this->showResponse($academies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AcademyStoreRequest $request)
    {
        $academy = Academy::create($request->all());

        return $this->showResponse($academy);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $academy = Academy::findOrFail($id);

        return $this->showResponse($academy, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AcademyUpdateRequest $request, string $id)
    {
         $academy = Academy::findOrFail($id);

         $academy->update($request->all());

         $this->showResponse($academy, 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $academy = Academy::findOrFail($id);

        $academy->delete();

        $this->showResponse($academy, 204);
    }
}
