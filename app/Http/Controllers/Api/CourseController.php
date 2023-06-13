<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CourseStoreRequest;
use App\Http\Requests\Course\CourseUpdateRequest;
use App\Http\Resources\Course\CourseCollection;
use App\Http\Resources\Course\CourseResource;
use App\Models\Course;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $courses = Course::query()
            ->with('lessons')
            ->when($request->has('status'), fn($query) => $query->where('status', $request->get('status')))
            ->when($request->has('is_premium'), fn($query) => $query->where('is_premium', $request->get('is_premium')))
            ->when($request->has('search'), fn($query) => $query->where('name', 'like', '%' . $request->get('search') . '%'))
            ->when($request->has('sort'), fn($query) => $query->orderBy('name', $request->get('sort')))
            ->orderByDesc('created_at')
            ->paginate($request->get('per_page', 10));

        return $this->sendResponse(
            data: new CourseCollection($courses),
            message: 'Courses retrieved successfully.'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseStoreRequest $request): JsonResponse
    {
        $course = Course::query()->create($request->validated());

        return $this->sendResponse(
            data: new CourseResource($course),
            message: 'Course created successfully.',
            code: 201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $course = Course::query()->find($id);
        if (!$course) {
            return $this->sendError(
                error: 'Course not found.',
            );
        }
        return $this->sendResponse(
            data: new CourseResource($course),
            message: 'Course retrieved successfully.'
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseUpdateRequest $request, int $id): JsonResponse
    {
        $course = Course::query()->find($id);
        if (!$course) {
            return $this->sendError(
                error: 'Course not found.',
            );
        }
        $course->update($request->validated());

        return $this->sendResponse(
            data: new CourseResource($course),
            message: 'Course updated successfully.'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $course = Course::query()->find($id);
        if (!$course) {
            return $this->sendError(
                error: 'Course not found.',
            );
        }
        $course->delete();

        return $this->sendResponse(
            data: null,
            message: 'Course deleted successfully.'
        );
    }
}
