<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\LessonStoreRequest;
use App\Http\Requests\Lesson\LessonUpdateRequest;
use App\Http\Resources\Lesson\LessonCollection;
use App\Http\Resources\Lesson\LessonResource;
use App\Models\Lesson;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $lessons = Lesson::query()
            ->with('course')
            ->when($request->has('course_id'), fn($query) => $query->where('course_id', $request->course_id))
            ->when($request->has('status'), fn($query) => $query->where('status', $request->status))
            ->when($request->has('is_premium'), fn($query) => $query->where('is_premium', $request->is_premium))
            ->paginate(10);

        return $this->sendResponse(
            data: new LessonCollection($lessons),
            message: 'Lessons retrieved successfully.'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LessonStoreRequest $request): JsonResponse
    {
        $data = $request->validated();

        $lesson = Lesson::query()->create($data);

        return $this->sendResponse(
            data: new LessonResource($lesson),
            message: 'Lesson created successfully.',
            code: 201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $lesson = Lesson::query()->find($id);

        if (!$lesson) {
            return $this->sendError(
                error: 'Lesson not found.',
                code: 404
            );
        }
        return $this->sendResponse(
            data: new LessonResource($lesson),
            message: 'Lesson retrieved successfully.'
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LessonUpdateRequest $request, int $id): JsonResponse
    {
        $lesson = Lesson::query()->find($id);
        if (!$lesson) {
            return $this->sendError(
                error: 'Lesson not found.',
                code: 404
            );
        }
        $lesson->update($request->validated());

        return $this->sendResponse(
            data: new LessonResource($lesson),
            message: 'Lesson updated successfully.'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $lesson = Lesson::query()->find($id);
        if (!$lesson) {
            return $this->sendError(
                error: 'Lesson not found.',
                code: 404
            );
        }
        $lesson->delete();

        return $this->sendResponse(
            data: null,
            message: 'Lesson deleted successfully.'
        );
    }
}
