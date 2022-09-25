<?php

namespace App\Http\Livewire\Admin\Mentor;

use Livewire\Component;
use Livewire\WithFileUploads;



use App\Models\Mentor;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminEditMentorComponent extends Component
{
    use WithFileUploads;

    public $mentor_id;

    public $name, $field, $description, $image, $new_image;

    public function Update()
    {
        $data = Mentor::find($this->mentor_id);

        $data->name = $this->name;
        $data->field = $this->field;
        $data->description = $this->description;


        if ($this->new_image) {
            $imageName = $this->name."_".Carbon::now()->timestamp.'.'.$this->new_image->extension();
            $this->new_image->storeAs('mentors/',$imageName);
            $data->image = $imageName;
        }

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Mentor Information Updated']);
        }

        // $this->emit('doSomething');
    }


    public function mount($id)
    {
        $this->mentor_id = $id;

        $data = Mentor::find($this->mentor_id);

        $this->name = $data->name;
        $this->field = $data->field;
        $this->description = $data->description;
        $this->image = $data->image;

    }


    public function render()
    {
        return view('livewire.admin.mentor.admin-edit-mentor-component')->layout('livewire.admin.base.admin_base');
    }
}
