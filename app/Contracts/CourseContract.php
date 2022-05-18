<?php

namespace App\Contracts;

use App\Models\Course;
use Illuminate\Http\Request;

interface CourseContract
{
    public function store(Request $request);
    public function show(Course $course);
    public function update(Request $request, Course $course);
    public function destroy(Course $course);
}