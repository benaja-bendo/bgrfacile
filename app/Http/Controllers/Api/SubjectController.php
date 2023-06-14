<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\SubjectStoreRequest;
use App\Http\Requests\Subject\SubjectUpdateRequest;
use App\Http\Resources\Subject\SubjectCollection;
use App\Http\Resources\Subject\SubjectResource;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $subjects = Subject::all();
        return $this->sendResponse(
            data: new SubjectCollection($subjects),
            message: 'Subjects retrieved successfully.'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectStoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        $subject = Subject::query()->create($data);

        return $this->sendResponse(
            data: new SubjectResource($subject),
            message: 'Subject created successfully.'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $subject = Subject::query()->find($id);
        if (!$subject) {
            return $this->sendError(
                error: 'Subject not found.'
            );
        }
        return $this->sendResponse(
            data: new SubjectResource($subject),
            message: 'Subject retrieved successfully.'
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubjectUpdateRequest $request, int $id): JsonResponse
    {
        $subject = Subject::query()->find($id);
        if (!$subject) {
            return $this->sendError(
                error: 'Subject not found.'
            );
        }
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        $subject->update($data);

        return $this->sendResponse(
            data: new SubjectResource($subject),
            message: 'Subject updated successfully.'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $subject = Subject::query()->find($id);
        if (!$subject) {
            return $this->sendError(
                error: 'Subject not found.'
            );
        }
        $subject->delete();

        return $this->sendResponse(
            data: null,
            message: 'Subject deleted successfully.'
        );
    }
}
