<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Dashboard')]
class DashboardPage extends Component
{
    public function render()
    {
        return view('livewire.dashboard-page');
    }
}
