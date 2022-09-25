<?php

namespace App\Http\Livewire\Web\Home\Course\Business;

use Livewire\Component;

use App\Models\Course;
use App\Models\Category;
use App\Models\PopularCourse;

class AllBusinessCoursesComponent extends Component
{
    public function render()
    {
        $data = PopularCourse::where('section_name','business_courses')->first();

       $allBusinessCourses = Course::whereIn('id',json_decode($data->courses))->where('published',1)->get();

        return view('livewire.web.home.course.business.all-business-courses-component',compact('allBusinessCourses'));
    }
}
