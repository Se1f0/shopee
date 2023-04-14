<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;

class AdminSettingComponent extends Component
{
    public $email;
    public $email2;
    public $phone;
    public $phone2;
    public $address;
    public $facebook;
    public $instagram;
    public $twitter;
    public $youtube;

    public function mount()
    {
        $setting = Setting::find(1);
        if ($setting) {
            $this->email = $setting->email;
            $this->email2 = $setting->email2;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->facebook = $setting->facebook;
            $this->instagram = $setting->instagram;
            $this->twitter = $setting->twitter;
            $this->youtube = $setting->youtube;
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'email' => 'required|email',
            'email2' => 'required|email',
            'phone' => 'required',
            'phone2' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'youtube' => 'required'
        ]);
    }

    public function saveSettings()
    {
        $this->validate([
            'email' => 'required|email',
            'email2' => 'required|email',
            'phone' => 'required',
            'phone2' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'youtube' => 'required'
        ]);

        $setting = Setting::find(1);

        if (!$setting) {
            $setting = new Setting();
        }

        $setting->email = $this->email;
        $setting->email2 = $this->email2;
        $setting->phone = $this->phone;
        $setting->phone2 = $this->phone2;
        $setting->address = $this->address;
        $setting->facebook = $this->facebook;
        $setting->instagram = $this->instagram;
        $setting->twitter = $this->twitter;
        $setting->youtube = $this->youtube;

        $setting->save();
        session()->flash('settings_success', 'Settings has been changed successfully !');
    }

    public function render()
    {
        return view('livewire.admin.admin-setting-component');
    }
}
