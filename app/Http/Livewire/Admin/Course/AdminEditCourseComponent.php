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

class AdminEditCourseComponent extends Component
{
    use WithFileUploads;

    public $course_id;

    public $main, $sub, $main_id, $sub_id, $category;

    public $name, $category_id, $tags, $vendor_id, $price, $sale_price, $duration, $no_of_class, $class_timing, $branch, $vendor_exam, $lavel, $overview, $curriculam, $mentor_id, $on_sale, $sale_end, $published, $career_track, $image, $new_image;



    public function Update()
    {
        $data = Course::find($this->course_id);

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


        if ($this->new_image) {
            $imageName = $this->name."_".Carbon::now()->timestamp.'.'.$this->new_image->extension();
            $this->new_image->storeAs('courses/'.$this->name,$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Course Updated']);
        }

        // $this->emit('doSomething');
    }



    public function mount($id)
    {

        $this->main = Category::where('parent_id', null)->get();
        $this->sub = collect();

        $this->course_id = $id;

        $data = Course::find($this->course_id);

        $temp_cat = Category::where('id',$data->category_id)->with('parents')->first();

        // dd($temp_cat);

        $this->main_id = $temp_cat->parents->parents->id;
        $this->sub_id = $temp_cat->parents->id;


        $this->name = $data->name;
        $this->category_id = $data->category_id;
        $this->tags = $data->tags;
        $this->vendor_id = $data->vendor_id;
        $this->price = $data->price;
        $this->sale_price = $data->sale_price;
        $this->duration = $data->duration;
        $this->no_of_class = $data->no_of_class;
        $this->class_timing = $data->class_timing;
        $this->branch = $data->branch;
        $this->vendor_exam = $data->vendor_exam;
        $this->lavel = $data->lavel;
        $this->overview = $data->overview;
        $this->curriculam = $data->curriculam;
        $this->mentor_id = $data->mentor_id;
        $this->on_sale = $data->on_sale;
        $this->sale_end = $data->sale_end;
        $this->published = $data->published;
        $this->career_track = $data->career_track;
        $this->image = $data->image;


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

        return view('livewire.admin.course.admin-edit-course-component',compact('allVendors','allMentors'))->layout('livewire.admin.base.admin_base');
    }
}
