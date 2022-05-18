<?php

namespace App\Http\Controllers;

use App\Services\CourseService;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private CourseService $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->middleware('auth');
        $this->courseService = $courseService;
    }

    public function store(Request $request)
    {
        return $this->courseService->store($request);
    }

    public function show(Course $course)
    {
        return $this->courseService->show($course);
    }

    public function update(Request $request, Course $course)
    {
        return $this->courseService->update($request, $course);
    }

    public function destroy(Course $course)
    {
        return $this->courseService->destroy($course);
    }
}
