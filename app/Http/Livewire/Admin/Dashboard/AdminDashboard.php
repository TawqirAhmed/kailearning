<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;

use App\Models\Course;
use App\Models\Category;
use App\Models\PopularCourse;

class AdminDashboard extends Component
{

    public function test()
    {
       $array = [2,3];

       $data = PopularCourse::where('section_name','it_courses')->first();

       $allITcourses = Course::whereIn('id',json_decode($data->courses))->get();

        dd($allITcourses);
    }


    public function render()
    {
        return view('livewire.admin.dashboard.admin-dashboard')->layout('livewire.admin.base.admin_base');
    }
}
