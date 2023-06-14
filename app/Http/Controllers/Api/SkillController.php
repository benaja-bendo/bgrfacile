<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skill\SkillStoreRequest;
use App\Http\Requests\Skill\SkillUpdateRequest;
use App\Http\Resources\Skill\SkillCollection;
use App\Http\Resources\Skill\SkillResource;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $skills = Skill::all();

        return $this->sendResponse(
            data: new SkillCollection($skills),
            message: 'Skills retrieved successfully.'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillStoreRequest $request): JsonResponse
    {
        $data = $request->validated();
        $skill = Skill::query()->create($data);

        return $this->sendResponse(
            data: new SkillResource($skill),
            message: 'Skill created successfully.', code: 201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $skill = Skill::query()->find($id);
        if (!$skill) {
            return $this->sendError(
                error: 'Skill not found.'
            );
        }

        return $this->sendResponse(
            data: new SkillResource($skill),
            message: 'Skill retrieved successfully.'
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillUpdateRequest $request, int $id): JsonResponse
    {
        $skill = Skill::query()->find($id);
        if (!$skill) {
            return $this->sendError(
                error: 'Skill not found.'
            );
        }

        $data = $request->validated();
        $skill->update($data);

        return $this->sendResponse(
            data: new SkillResource($skill),
            message: 'Skill updated successfully.'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $skill = Skill::query()->find($id);
        if (!$skill) {
            return $this->sendError(
                error: 'Skill not found.'
            );
        }

        $skill->delete();

        return $this->sendResponse(
            data: null,
            message: 'Skill deleted successfully.'
        );
    }
}
