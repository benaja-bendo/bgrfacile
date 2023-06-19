<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Cycle;
use App\Models\Level;
use App\Models\Subject;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(Request $request): View
    {
        $courses = Course::query()
            ->when($request->has('search'), fn($query) => $query->where('name', 'like', '%' . $request->get('search') . '%'))
            ->when($request->has('is_premium'), fn($query) => $query->where('is_premium', $request->get('is_premium')))
//            ->when($request->has('status'), fn($query) => $query->where('status', $request->get('status')))
//            ->when($request->has('sort'), fn($query) => $query->orderBy('name', $request->get('sort')))
            ->where('status', 'published')
            ->orderByDesc('created_at')
//            ->paginate($request->get('per_page', 10));
            ->paginate();
//        dd($courses->first()->, $courses->lastItem(), $courses->total());
        return view('Pages.course.index', [
            'courses' => $courses,
            'cycles' => Cycle::query()->where('status', 'published')->get(),
            'levels' => Level::query()->where('status', 'published')->get(),
            'subjects' => Subject::query()->where('status', 'published')->get(),
        ]);
    }

    public function showSlug(Request $request, string $slug, int $id): View
    {
        $course = Course::query()
            ->where('id', $id)
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
        return view('Pages.course.show', [
            'course' => $course,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:courses,name',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_premium' => 'required|boolean',
            'status' => 'required|in:draft,published',
            'cycle_id' => 'required|exists:cycles,id',
            'level_id' => 'required|exists:levels,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $course = new Course();
        $course->name = $request->get('name');
        $course->description = $request->get('description');
        $course->is_premium = $request->get('is_premium');
        $course->status = $request->get('status');
        $course->cycle_id = $request->get('cycle_id');
        $course->level_id = $request->get('level_id');
        $course->subject_id = $request->get('subject_id');
        $course->save();

        $imageName = $course->id . '.' . $request->image->extension();
        $request->image->move(public_path('images/courses'), $imageName);

        $course->image = $imageName;
        $course->save();

        return redirect()->route('course.perso')->with('success', 'Course created successfully.');
    }
}
