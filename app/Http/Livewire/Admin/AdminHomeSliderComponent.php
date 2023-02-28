<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function render()
    {
        $slides = HomeSlider::orderBy('created_at', 'asc')->get();
        return view('livewire.admin.admin-home-slider-component', ['slides' => $slides]);
    }
}
