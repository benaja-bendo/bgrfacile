<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Level\LevelStoreRequest;
use App\Http\Requests\Level\LevelUpdateRequest;
use App\Http\Resources\Level\LevelCollection;
use App\Http\Resources\Level\LevelResource;
use App\Models\Level;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $levels = Level::all();

        return $this->sendResponse(
            data: new LevelCollection($levels),
            message: 'Levels retrieved successfully.'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LevelStoreRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        $level = Level::query()->create($data);

        return $this->sendResponse(
            data: new LevelResource($level),
            message: 'Level created successfully.',
            code: 201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $level = Level::query()->find($id);
        if (!$level) {
            return $this->sendError(
                error: 'Level not found.',
                code: 404
            );
        }
        return $this->sendResponse(
            data: new LevelResource($level),
            message: 'Level retrieved successfully.'
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LevelUpdateRequest $request, int $id): JsonResponse
    {
        $level = Level::query()->find($id);
        if (!$level) {
            return $this->sendError(
                error: 'Level not found.',
                code: 404
            );
        }
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        $level->update($data);

        return $this->sendResponse(
            data: new LevelResource($level),
            message: 'Level updated successfully.'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $level = Level::query()->find($id);
        if (!$level) {
            return $this->sendError(
                error: 'Level not found.',
                code: 404
            );
        }
        $level->delete();

        return $this->sendResponse(
            data: null,
            message: 'Level deleted successfully.'
        );
    }
}
