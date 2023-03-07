<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserOrderComponent extends Component
{
    public $order_id;

    use WithPagination;

    public function render()
    {
        // dd(Auth::user()->id);
        $orders = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.user.user-order-component', ['orders' => $orders]);
    }
}
