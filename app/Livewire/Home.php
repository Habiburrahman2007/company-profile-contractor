<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Layout;

class Home extends Component
{
    #[Title('Home - BuildCorp')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.home')->layoutData([
            'description' => 'BuildCorp delivers top-tier construction solutions with a focus on quality, safety, and sustainability for commercial and residential projects.',
            'keywords' => 'construction, contractor, builder, commercial, residential, renovation, engineering, sustainable building',
            'og_image' => asset('img/home/hero.jpeg'),
        ]);
    }
}
