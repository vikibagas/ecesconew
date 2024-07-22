<?php

namespace App\Livewire\Masterdata;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Master Data Users')]
class UsersPage extends Component
{
    public function render()
    {
        return view('livewire.masterdata.users-page');
    }
}
