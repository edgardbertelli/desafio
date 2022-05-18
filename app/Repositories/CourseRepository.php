<?php

namespace App\Repositories;

use App\Contracts\CourseContract;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseRepository implements CourseContract
{
    private Course $courses;

    public function __construct(Course $courses)
    {
        $this->courses = $courses;
    }

    public function store(Request $request)
    {
        $course =  $this->courses::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'author' => $request->author,
            'length' => $request->length
        ]);

        return new CourseResource($course);
    }

    public function show(Course $course)
    {
        return new CourseResource($course);
    }

    public function update(Request $request, Course $course)
    {
        $course->update([
            'title' => is_null($request->title) ? $course->title : $request->title,
            'description' => is_null($request->description) ? $course->description : $request->description,
            'category_id' => is_null($request->category_id) ? $course->category_id : $request->category_id,
            'price' => is_null($request->price) ? $course->price : $request->price,
            'author' => is_null($request->author) ? $course->author : $request->author,
            'length' => is_null($request->length) ? $course->length : $request->length
        ]);

        return new CourseResource($course->fresh());
    }

    public function destroy(Course $course)
    {
        return $course->delete();
    }
}
