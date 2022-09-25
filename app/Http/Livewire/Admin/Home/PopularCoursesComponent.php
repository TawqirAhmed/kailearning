<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;

use App\Models\PopularCourse;
use App\Models\Course;
use App\Models\Category;

class PopularCoursesComponent extends Component
{
    public $it_courses_array, $business_courses_array,$career_courses_array;



    public function Update()
    {
        $it_data = PopularCourse::where('section_name','it_courses')->first();
        $it_data->courses = json_encode($this->it_courses_array);

        $business_data = PopularCourse::where('section_name','business_courses')->first();
        $business_data->courses = json_encode($this->business_courses_array);

        $career_data = PopularCourse::where('section_name','career_track')->first();
        $career_data->courses = json_encode($this->career_courses_array);

        $done_it = $it_data->save();
        $done_business = $business_data->save();
        $done_career = $career_data->save();

        if ($done_it && $done_business && $done_career) {
            
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Popular Courses Updated.']);

            
        }
    }


    public function mount()
    {
        $it_data = PopularCourse::where('section_name','it_courses')->first();

        $this->it_courses_array = json_decode($it_data->courses);

        $business_data = PopularCourse::where('section_name','business_courses')->first();

        $this->business_courses_array = json_decode($business_data->courses);

        $career_data = PopularCourse::where('section_name','career_track')->first();

        $this->career_courses_array = json_decode($career_data->courses);
    }

    public function render()
    {
        $it_temp = Category::where('id',1)->with('children')->first();

        $it_cattegory_ids = array();

        foreach ($it_temp->children as $key => $value) {
            
            foreach ($value->children as $key2 => $value2) {
                
                array_push($it_cattegory_ids,$value2->id);

            }
        }

        $business_temp = Category::where('id',2)->with('children')->first();

        $business_cattegory_ids = array();

        foreach ($business_temp->children as $key => $value) {
            
            foreach ($value->children as $key2 => $value2) {
                
                array_push($business_cattegory_ids,$value2->id);

            }
        }

        $allITCourses = Course::whereIn('category_id',$it_cattegory_ids)->where('published',1)->get();

        $allBusinessCourses = Course::whereIn('category_id',$business_cattegory_ids)->where('published',1)->get();

        $allCareerCourses = Course::where('career_track',1)->where('published',1)->get();
        // dd($it_cattegory_ids);

        return view('livewire.admin.home.popular-courses-component',compact('allITCourses','allBusinessCourses','allCareerCourses'))->layout('livewire.admin.base.admin_base');
    }
}
