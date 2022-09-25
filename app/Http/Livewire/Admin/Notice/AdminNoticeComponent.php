<?php

namespace App\Http\Livewire\Admin\Notice;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Notice;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth;

class AdminNoticeComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;

    //for Add Event
    public $title, $short_description, $body;

    //for Edit Event
    public $edit_id;
    public $e_title, $e_short_description, $e_body;



    public function Store()
    {
        $data = new Notice();

        $data->author = Auth::user()->name;
        $data->title = $this->title;
        $data->short_description = $this->short_description;
        $data->body = $this->body;

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Notice Added']);
        }
        
        $this->emit('doSomething');

        $this->title = null;
        $this->short_description = null;
        $this->body = null;

        
    }


    public function Update()
    {
        $data = Notice::find($this->edit_id);

        
        $data->title = $this->e_title;
        $data->short_description = $this->e_short_description;
        $data->body = $this->e_body;

        $done = $data->save();

        if ($done) {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Notice Updated']);
        }
        
        $this->emit('doSomething');

        $this->e_title = null;
        $this->e_short_description = null;
        $this->e_body = null;

    }


    public function getItem($id)
    {
        $this->edit_id = $id;

        $data = Notice::find($this->edit_id);

        $this->e_title = $data->title;
        $this->e_short_description = $data->short_description;
        $this->e_body = $data->body;
        
        // dd(Auth::user()->name);
    }

    public function render()
    {

        $allNotices = Notice::paginate($this->paginate);

        return view('livewire.admin.notice.admin-notice-component',compact('allNotices'))->layout('livewire.admin.base.admin_base');
    }
}
