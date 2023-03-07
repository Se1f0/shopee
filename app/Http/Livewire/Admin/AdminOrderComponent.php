<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    public $order_id;

    use WithPagination;

    public function render()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.admin.admin-order-component', ['orders' => $orders]);
    }
}
