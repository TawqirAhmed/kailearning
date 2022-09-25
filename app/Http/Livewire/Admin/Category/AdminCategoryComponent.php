<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

use App\Models\Category;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;

    //for Add Category
    public $main, $sub, $main_id_array = array();
    public $name, $main_id, $sub_id, $meta_title, $image;

    //for Edit Category
    public $edit_id;
    public $e_name, $e_main_id, $e_sub_id, $e_meta_title, $e_image, $new_image;

    public function Store()
    {

        $data = new Category();

        $data->name = $this->name;
        $data->parent_id = $this->sub_id;
        $data->meta_title = $this->meta_title;

        if ($this->image) {
            $imageName = $this->name."_".Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('categories/'.$this->name,$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Category Added']);
        }
        
        $this->emit('doSomething');

        $this->name = null;
        $this->main_id = null;
        $this->sub_id = null;
        $this->meta_title = null;
        $this->image = null;
        $this->sub = collect();
    }


    public function getCategory($id)
    {
        $this->edit_id = $id;
        $data = Category::where('id',$id)->with('parents')->first();

        $this->sub = Category::where('parent_id',$data->parents->parents->id)->get();

        $this->e_name = $data->name;
        $this->e_main_id = $data->parents->parents->id;
        $this->e_sub_id = $data->parent_id;
        $this->e_meta_title = $data->meta_title;
        $this->e_image = $data->image;

        // dd($data);
    }

    public function Update()
    {
        $data = Category::find($this->edit_id);

        $data->name = $this->e_name;  
        $data->parent_id = $this->e_sub_id; 
        $data->meta_title = $this->e_meta_title; 

        if ($this->new_image) {
            $imageName = $this->e_name."_".Carbon::now()->timestamp.'.'.$this->new_image->extension();
            $this->new_image->storeAs('categories/'.$this->e_name,$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Category Updated']);
        }

        $this->emit('doSomething');

        $this->e_name = null;
        $this->e_main_id = null;
        $this->e_sub_id = null;
        $this->e_meta_title = null;
        $this->e_image = null;
        $this->new_image = null;
        $this->sub = collect();

    }


    public function mount()
    {
        $this->main = Category::where('parent_id',null)->get();
        foreach ($this->main as $key => $value) {
            array_push($this->main_id_array, $value->id);
        }

        $this->sub = collect();
    }

    public function render()
    {

        if ($this->main_id !=null) {
            
            $this->sub = Category::where('parent_id',$this->main_id)->get();
            // dd($this->sub);
        }

        

        $allCategories = Category::with('parents','children')->paginate($this->paginate);
        // dd($this->sub);
        return view('livewire.admin.category.admin-category-component',compact('allCategories'))->layout('livewire.admin.base.admin_base');
    }
}
