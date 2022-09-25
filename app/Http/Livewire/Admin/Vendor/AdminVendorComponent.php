<?php

namespace App\Http\Livewire\Admin\Vendor;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

use App\Models\Vendor;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminVendorComponent extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;

    //for Add Category
    public $name, $image;

    //for Edit Category
    public $edit_id;
    public $e_name, $e_image, $new_image;


    public function Store()
    {

        $data = new Vendor();

        $data->name = $this->name;

        if ($this->image) {
            $imageName = $this->name."_".Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('vendors/',$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Vendor Added']);
        }
        
        $this->emit('doSomething');

        $this->name = null;
        $this->image = null;
    }


    public function getItem($id)
    {
        $this->edit_id = $id;
        $data = Vendor::where('id',$id)->first();

        

        $this->e_name = $data->name;
        $this->e_image = $data->image;

        // dd($data);
    }

    public function Update()
    {
        $data = Vendor::find($this->edit_id);

        $data->name = $this->e_name;

        if ($this->new_image) {
            $imageName = $this->e_name."_".Carbon::now()->timestamp.'.'.$this->new_image->extension();
            $this->new_image->storeAs('vendors/',$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Vendor Information Updated']);
        }

        $this->emit('doSomething');

        $this->e_name = null;
        $this->e_image = null;
        $this->new_image = null;

    }


    public function render()
    {
        $allVendors = Vendor::paginate($this->paginate);

        return view('livewire.admin.vendor.admin-vendor-component',compact('allVendors'))->layout('livewire.admin.base.admin_base');
    }
}
