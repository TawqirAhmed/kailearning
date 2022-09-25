<?php

namespace App\Http\Livewire\Web\Home\Course\Careertrack;

use Livewire\Component;

use App\Models\Course;
use App\Models\Category;
use App\Models\PopularCourse;

class AllCareerTrackCoursesComponent extends Component
{
    public function render()
    {
        $data = PopularCourse::where('section_name','career_track')->first();

       $allCareerCourses = Course::whereIn('id',json_decode($data->courses))->where('published',1)->where('career_track',1)->get();

        return view('livewire.web.home.course.careertrack.all-career-track-courses-component',compact('allCareerCourses'));
    }
}
