<?php

namespace App\Http\Livewire\Web\Contactus;

use Livewire\Component;

class ContactUsComponent extends Component
{
    public function render()
    {
        return view('livewire.web.contactus.contact-us-component')->layout('livewire.web.base.base');
    }
}
