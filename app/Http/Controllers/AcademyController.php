<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

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
    public function store(Request $request)
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
    public function update(Request $request, string $id)
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
