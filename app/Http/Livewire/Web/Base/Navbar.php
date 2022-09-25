<?php

namespace App\Http\Livewire\Web\Base;

use Livewire\Component;

use App\Models\Category;

class Navbar extends Component
{
    public function render()
    {

        // $category_list = Category::where('parent_id',null)->with('children')->get();
        $category_list_it = Category::where('parent_id',1)->with('children')->get();
        $category_list_business = Category::where('parent_id',2)->with('children')->get();
        $category_list_medical = Category::where('parent_id',3)->with('children')->get();

        // dd($category_list_it);

        return view('livewire.web.base.navbar',compact('category_list_it','category_list_business','category_list_medical'));
    }
}
