<?php

namespace App\Http\Livewire\Web\Courses;

use Livewire\Component;

use App\Models\Course;
use App\Models\Category;

class CoursesComponent extends Component
{

    public $course_category_id;

    public function mount($id)
    {
        $this->course_category_id = $id;
    }

    public function render()
    {

        $course_list = Course::where('category_id',$this->course_category_id)->where('published',1)->with('category','vendor','mentor')->get(); 

        $page_route = Category::where('id',$this->course_category_id)->with('parents')->first();

        $page_link = $page_route->parents->parents->name. ' > ' . $page_route->parents->name. ' > ' . $page_route->name;
        // dd($page_link);

        return view('livewire.web.courses.courses-component',compact('course_list','page_link'))->layout('livewire.web.base.base');
    }
}
