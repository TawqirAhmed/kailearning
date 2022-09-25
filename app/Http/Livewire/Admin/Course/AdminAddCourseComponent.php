<?php

namespace App\Http\Livewire\Admin\Course;

use Livewire\Component;
use Livewire\WithFileUploads;


use App\Models\Course;
use App\Models\Category;
use App\Models\Vendor;
use App\Models\Mentor;
use Illuminate\Support\Str;
use Carbon\Carbon;


class AdminAddCourseComponent extends Component
{
    use WithFileUploads;

    

    public $main, $sub, $main_id, $sub_id, $category;

    public $name, $category_id, $tags, $vendor_id, $price, $sale_price, $duration, $no_of_class, $class_timing, $branch, $vendor_exam, $lavel, $overview, $curriculam, $mentor_id, $on_sale, $sale_end, $published, $career_track, $image;


     public function Store()
    {
        $data = new Course();

        $data->name = $this->name;
        $data->category_id = $this->category_id;
        $data->tags = $this->tags;
        $data->vendor_id = $this->vendor_id;
        $data->price = $this->price;
        $data->sale_price = $this->sale_price;
        $data->duration = $this->duration;
        $data->no_of_class = $this->no_of_class;
        $data->class_timing = $this->class_timing;
        $data->branch = $this->branch;
        $data->vendor_exam = $this->vendor_exam;
        $data->lavel = $this->lavel;
        $data->overview = $this->overview;
        $data->curriculam = $this->curriculam;
        $data->mentor_id = $this->mentor_id;
        $data->on_sale = $this->on_sale;
        $data->sale_end = $this->sale_end;
        $data->published = $this->published;
        $data->career_track = $this->career_track;


        if ($this->image) {
            $imageName = $this->name."_".Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('courses/'.$this->name,$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Course Added']);
        }

        // $this->emit('doSomething');
    }


    public function mount()
    {
        $this->main = Category::where('parent_id', null)->get();
        $this->sub = collect();
        $this->category = collect();
    }


    public function render()
    {
        if($this->main_id != null){
            $this->sub = Category::where('parent_id',$this->main_id)->get();
        }
        if($this->main_id != null && $this->sub_id != null){
            $this->category = Category::where('parent_id',$this->sub_id)->get();
        }

        $allVendors = Vendor::all();
        $allMentors = Mentor::all();

        return view('livewire.admin.course.admin-add-course-component',compact('allVendors','allMentors'))->layout('livewire.admin.base.admin_base');
    }
}
