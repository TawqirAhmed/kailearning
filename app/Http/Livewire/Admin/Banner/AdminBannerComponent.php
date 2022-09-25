<?php

namespace App\Http\Livewire\Admin\Banner;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Banner;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminBannerComponent extends Component
{
    
    use WithFileUploads;

    public $image, $e_image, $new_image, $edit_id;

    public function Store()
    {
        $data = new Banner();

        if ($this->image) {
            $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('banners/',$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Banner Added']);
        }
        
        $this->emit('doSomething');

        $this->image = null;
    }

    public function Update()
    {
        $data = Banner::find($this->edit_id);

        if ($this->new_image) {
            $imageName = Carbon::now()->timestamp.'.'.$this->new_image->extension();
            $this->new_image->storeAs('banners/',$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Banner Updated']);
        }
        
        $this->emit('doSomething');

        $this->image = null;
        $this->new_image = null;
    }

    public function getItem($id)
    {
        $this->edit_id = $id;

        $data = Banner::find($this->edit_id);

        $this->e_image = $data->image;
    }

    public function render()
    {
        $allBallners = Banner::all();
        return view('livewire.admin.banner.admin-banner-component',compact('allBallners'))->layout('livewire.admin.base.admin_base');
    }
}
