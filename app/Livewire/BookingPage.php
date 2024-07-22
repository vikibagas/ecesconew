<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
#[Title('Booking')]
class BookingPage extends Component
{
    public function render()
    {
        return view('livewire.booking-page');
    }
}
