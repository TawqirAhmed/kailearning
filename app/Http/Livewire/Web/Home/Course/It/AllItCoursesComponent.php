<?php

namespace App\Http\Livewire\Web\Home\Course\It;

use Livewire\Component;

use App\Models\Course;
use App\Models\Category;
use App\Models\PopularCourse;

class AllItCoursesComponent extends Component
{

    public function render()
    {
        $data = PopularCourse::where('section_name','it_courses')->first();

       $allITcourses = Course::whereIn('id',json_decode($data->courses))->where('published',1)->get();

        return view('livewire.web.home.course.it.all-it-courses-component',compact('allITcourses'));
    }
}
