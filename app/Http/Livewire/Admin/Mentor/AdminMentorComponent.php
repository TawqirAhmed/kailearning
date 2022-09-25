<?php

namespace App\Http\Livewire\Admin\Mentor;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Mentor;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminMentorComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;

    public function render()
    {

        $allMrntors = Mentor::paginate($this->paginate);

        return view('livewire.admin.mentor.admin-mentor-component',compact('allMrntors'))->layout('livewire.admin.base.admin_base');
    }
}
