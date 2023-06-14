<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Cycle;
use App\Models\Level;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(Request $request): View
    {
        $courses = Course::query()
            ->when($request->has('status'), fn($query) => $query->where('status', $request->get('status')))
            ->when($request->has('is_premium'), fn($query) => $query->where('is_premium', $request->get('is_premium')))
            ->when($request->has('search'), fn($query) => $query->where('name', 'like', '%' . $request->get('search') . '%'))
            ->when($request->has('sort'), fn($query) => $query->orderBy('name', $request->get('sort')))
            ->orderByDesc('created_at')
//            ->paginate($request->get('per_page', 10));
            ->paginate(5);

        return view('Pages.course.index', [
            'courses' => $courses,
            'cycles' => Cycle::query()->where('status', 'published')->get(),
            'levels' => Level::query()->where('status', 'published')->get(),
            'matieres' => Subject::query()->where('status', 'published')->get(),
        ]);
    }

    public function showSlug(Request $request, string $slug, int $id): View
    {
        $course = Course::query()
            ->where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();
        return view('Pages.course.show', [
            'course' => $course,
        ]);
    }
}
