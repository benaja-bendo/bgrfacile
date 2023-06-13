<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cycle\CycleStoreRequest;
use App\Http\Requests\Cycle\CycleUpdateRequest;
use App\Http\Resources\Cycle\CycleCollection;
use App\Http\Resources\Cycle\CycleResource;
use App\Models\Cycle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $cycles = Cycle::all();

        return $this->sendResponse(
            data: new CycleCollection($cycles),
            message: 'Cycles retrieved successfully.'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CycleStoreRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        $cycle = Cycle::query()->create($data);

        return $this->sendResponse(
            data: new CycleResource($cycle),
            message: 'Cycle created successfully.',
            code: 201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $cycle = Cycle::query()->find($id);
        if ($cycle === null) {
            return $this->sendError(
                error: 'Cycle not found.',
                code: 404
            );
        }
        return $this->sendResponse(
            data: new CycleResource($cycle),
            message: 'Cycle retrieved successfully.'
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CycleUpdateRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();
        $cycle = Cycle::query()->find($id);
        if ($cycle === null) {
            return $this->sendError(
                error: 'Cycle not found.',
                code: 404
            );
        }
        $cycle->update($data);

        return $this->sendResponse(
            data: new CycleResource($cycle),
            message: 'Cycle updated successfully.'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $cycle = Cycle::query()->find($id);
        if ($cycle === null) {
            return $this->sendError(
                error: 'Cycle not found.',
                code: 404
            );
        }
        $cycle->delete();

        return $this->sendResponse(
            data: null,
            message: 'Cycle deleted successfully.'
        );
    }
}
