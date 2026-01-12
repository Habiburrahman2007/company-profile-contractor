<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Layout;


class Services extends Component
{
    #[Title('Our Services - BuildCorp')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.services')->layoutData([
            'description' => 'Explore our comprehensive construction services including General Contracting, Design & Build, Renovation, and Green Construction.',
            'keywords' => 'general contracting, design build, renovation, green construction, masonry, site preparation',
            'og_image' => asset('img/services/general.jpeg'),
        ]);
    }
}
