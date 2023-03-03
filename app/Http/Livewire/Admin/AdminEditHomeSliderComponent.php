<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $slide_id;
    public $top_title;
    public $title;
    public $sub_title;
    public $link;
    public $status = 1;
    public $image;
    public $newimage;

    public function mount($slide_id)
    {
        $slide = HomeSlider::find($slide_id);
        $this->slide_id = $slide->id;
        $this->top_title = $slide->top_title;
        $this->title = $slide->title;
        $this->sub_title = $slide->sub_title;
        $this->link = $slide->link;
        $this->status = $slide->status;
        $this->image = $slide->image;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'top_title' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'link' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);
    }

    public function updateSlide()
    {
        $this->validate([
            'top_title' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'link' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $slide = HomeSlider::find($this->slide_id);
        $slide->top_title = $this->top_title;
        $slide->title = $this->title;
        $slide->sub_title = $this->sub_title;
        $slide->link = $this->link;
        $slide->status = $this->status;
        if ($this->newimage) {
            unlink('assets/images/slider/' . $slide->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('slider', $imageName);
            $slide->image = $imageName;
        }

        $slide->save();
        session()->flash('message', 'Slide has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component');
    }
}
