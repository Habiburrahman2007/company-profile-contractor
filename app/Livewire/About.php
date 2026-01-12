<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Layout;

class About extends Component
{
    #[Title('About Us - BuildCorp')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.about')->layoutData([
            'description' => 'Learn more about BuildCorp\'s legacy, vision, and mission. Building trust and innovation since 2000.',
            'keywords' => 'about buildcorp, construction company history, vision and mission, construction team',
            'og_image' => asset('img/about2.jpeg'),
        ]);
    }
}
