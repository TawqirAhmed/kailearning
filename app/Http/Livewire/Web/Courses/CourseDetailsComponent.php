<?php

namespace App\Http\Livewire\Web\Courses;

use Livewire\Component;

use App\Models\Course;

class CourseDetailsComponent extends Component
{

    public $course_id;

    public function mount($id)
    {
        $this->course_id = $id;
    }

    public function render()
    {

        $course_info = Course::where('id',$this->course_id)->with('category','vendor','mentor')->first();

        return view('livewire.web.courses.course-details-component',compact('course_info'))->layout('livewire.web.base.base');
    }
}
