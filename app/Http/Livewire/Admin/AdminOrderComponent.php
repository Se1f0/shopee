<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    public $order_id;

    use WithPagination;

    public function updateOrderStatus($order_id, $status)
    {
        $order = Order::find($order_id);
        $order->status = $status;
        if ($status == 'delivered') {
            $order->delivered_date = DB::raw('CURRENT_DATE');
        } else if ($status == 'canceled') {
            $order->canceled_date = DB::raw('CURRENT_DATE');
        }
        $order->save();
        session()->flash('order_message', 'Order Status has been updated successfully !');
    }

    public function render()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.admin.admin-order-component', ['orders' => $orders]);
    }
}
