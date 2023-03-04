<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCouponComponent extends Component
{
    public $coupon_id;

    use WithPagination;

    public function deleteCoupon()
    {
        $coupon = Coupon::find($this->coupon_id);
        $coupon->delete();
        session()->flash('message', 'Coupon has been deleted successfully!');
    }

    public function render()
    {
        $coupons = Coupon::orderBy('code', 'ASC')->paginate(10);
        return view('livewire.admin.admin-coupon-component', ['coupons' => $coupons]);
    }
}
