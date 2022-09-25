<?php

namespace App\Http\Livewire\Web\Vendor;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Vendor;
class VendorComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $vendor_list = Vendor::paginate(8);

        return view('livewire.web.vendor.vendor-component',compact('vendor_list'))->layout('livewire.web.base.base');
    }
}
