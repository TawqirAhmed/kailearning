<?php

namespace App\Http\Livewire\Web\Notice;

use Livewire\Component;

use App\Models\Notice;

class NoticeDetailsComponent extends Component
{

    public $notice_id;

    public function mount($id)
    {
        $this->notice_id = $id;
    }


    public function render()
    {
        $notice_details = Notice::find($this->notice_id);

        $latest_notice_list = Notice::all()->sortByDesc('created_at')->take(4);

        return view('livewire.web.notice.notice-details-component',compact('notice_details','latest_notice_list'))->layout('livewire.web.base.base');
    }
}
