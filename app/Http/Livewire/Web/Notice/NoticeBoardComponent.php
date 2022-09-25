<?php

namespace App\Http\Livewire\Web\Notice;

use Livewire\Component;

use App\Models\Notice;

class NoticeBoardComponent extends Component
{
    public function render()
    {
        $notice_list = Notice::paginate(6);

        $latest_notice_list = Notice::all()->sortByDesc('created_at')->take(4);

        // dd($latest_notice_list);

        return view('livewire.web.notice.notice-board-component',compact('notice_list','latest_notice_list'))->layout('livewire.web.base.base');
    }
}
