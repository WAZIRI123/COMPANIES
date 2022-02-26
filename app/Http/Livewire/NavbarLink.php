<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavbarLink extends Component
{
    public $toggle ='position-absolute top-50 start-50 translate-middle d-md-none';
    public function togglesearch()
    {
        if ($this->toggle == 'position-absolute top-50 start-50 translate-middle d-md-none') {
            $this->toggle = 'position-absolute top-50 start-50 translate-middle';
        } else {
            $this->toggle='position-absolute top-50 start-50 translate-middle d-md-none';
        }
    }
    public function render()
    {
        return view('livewire.navbar-link');
    }
   
}
