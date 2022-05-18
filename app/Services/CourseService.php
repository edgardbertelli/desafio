<?php

namespace App\Services;

use App\Contracts\CourseContract as CourseRepository;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseService
{
    private CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|unique:courses',
            'description' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            'price'       => 'required|numeric',
            'author'      => 'required|string',
            'length'      => 'required|integer'
        ]);
 
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
    
        return $this->courseRepository->store($request);
    }

    public function show(Course $course)
    {
        return $this->courseRepository->show($course);
    }

    public function update(Request $request, Course $course)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'nullable|string|unique:courses',
            'description' => 'nullable|string',
            'category_id' => 'nullable|integer|exists:categories,id',
            'price'       => 'nullable|numeric',
            'author'      => 'nullable|string',
            'length'      => 'nullable|integer'
        ]);
 
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        return $this->courseRepository->update($request, $course);
    }

    public function destroy(Course $course)
    {
        return $this->courseRepository->destroy($course);
    }
}