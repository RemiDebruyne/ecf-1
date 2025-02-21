<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Timeslot;
use function PHPUnit\Framework\isNull;

class CourseController extends Controller
{
    public function create() {
        return view('courses.create');
    }

    public function store() {
        request()->validate([
            'activity' => 'required'
        ]);

        Course::create([
            'activity' => request('activity')
            ]);
    }

    // View for the form to edit courses
    public function edit(Course $course) {
        return view('courses.edit', [ 'course' => $course ]  );
    }

    // put method for
    public function update(Course $course) {
        request()->validate([
            'activity' => 'required',
        ]);

        $course->update([
            'activity' => request('activity'),
        ]);

        // return redirect('/courses/'.$course->id );
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/');
    }

    public function book(Course $course){
        $timeslots = Timeslot::all();

        if(isNull($course)){
            $course = Course::find(1);
        }

        return view('reservation.book-form', ['course' => $course, 'timeslots' => $timeslots ]);
    }
}
