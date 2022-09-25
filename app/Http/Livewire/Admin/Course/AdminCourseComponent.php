<?php

namespace App\Http\Livewire\Admin\Course;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Course;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminCourseComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;

    public function render()
    {
        $allCourses = Course::with('vendor','mentor','category')->paginate($this->paginate);

        // dd($allCourses);

        return view('livewire.admin.course.admin-course-component',compact('allCourses'))->layout('livewire.admin.base.admin_base');
    }
}
