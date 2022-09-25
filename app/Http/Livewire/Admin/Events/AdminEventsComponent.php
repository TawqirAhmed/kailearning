<?php

namespace App\Http\Livewire\Admin\Events;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Event;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminEventsComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;

    //for Add Event
    public $title, $start, $end;

    //for Edit Event
    public $edit_id;
    public $e_title, $e_start, $e_end;



    public function Store()
    {
        $data = new Event();

        $data->title = $this->title;
        $data->start = $this->start;
        $data->end = $this->end;

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Event Added']);
        }
        
        $this->emit('doSomething');

        $this->title = null;
        $this->start = null;
        $this->end = null;

    }


    public function Update()
    {
        $data = Event::find($this->edit_id);

        $data->title = $this->e_title;
        $data->start = $this->e_start;
        $data->end = $this->e_end;

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Event Updated']);
        }
        
        $this->emit('doSomething');

        $this->e_title = null;
        $this->e_start = null;
        $this->e_end = null;

    }


    public function getItem($id)
    {
        $this->edit_id = $id;

        $data = Event::find($this->edit_id);

        $this->e_title = $data->title;
        $this->e_start = date("Y-m-d\TH:i:s", strtotime($data->start));
        $this->e_end = date("Y-m-d\TH:i:s", strtotime($data->end));
        
        // dd(date("Y-m-d\TH:i:s", strtotime($data->start)));
    }


    public function render()
    {
        $allEvents = Event::paginate($this->paginate);

        return view('livewire.admin.events.admin-events-component',compact('allEvents'))->layout('livewire.admin.base.admin_base');
    }
}
