<?php

namespace App\Http\Livewire\Admin\Mentor;

use Livewire\Component;
use Livewire\WithFileUploads;



use App\Models\Mentor;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminAddMentorComponent extends Component
{
    use WithFileUploads;


    public $name, $field, $description, $image;

    public function Store()
    {
        $data = new Mentor();

        $data->name = $this->name;
        $data->field = $this->field;
        $data->description = $this->description;


        if ($this->image) {
            $imageName = $this->name."_".Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('mentors/',$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Mentor Added']);
        }

        // $this->emit('doSomething');
        $this->name = null;
        $this->field = null;
        $this->description = null;
        $this->image = null;
    }

    public function render()
    {
        return view('livewire.admin.mentor.admin-add-mentor-component')->layout('livewire.admin.base.admin_base');
    }
}
