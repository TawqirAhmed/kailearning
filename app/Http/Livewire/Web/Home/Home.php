<?php

namespace App\Http\Livewire\Web\Home;

use Livewire\Component;

use App\Models\Banner;

class Home extends Component
{

    public $course_filter_it = 0, $course_filter_business = 0; 


    public function filterIT($id)
    {
        $this->course_filter_it = $id;
    }

    public function filterBusiness($id)
    {
        $this->course_filter_business = $id;
    }

    public function render()
    {

        $banners = Banner::all();

        return view('livewire.web.home.home',compact('banners'))->layout('livewire.web.base.base');
    }
}
