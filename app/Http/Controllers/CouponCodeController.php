<?php

namespace App\Http\Controllers;

use App\Models\CouponCode;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CouponCodeController extends Controller
{
    public function check_promo_code(Request $request)
    {
        $mytime = Carbon::now();
        $promocode = strtoupper($request->promo);

        $is_promocode = CouponCode::select('expired_at','percentage')->where('code', $promocode)->first();
        $message = "";
        $status = "";
        if ($is_promocode) {
            if ($is_promocode->expired_at > $mytime) {
                $message = "Promo code Applied";
                $status = true;
            } else {
                $message = "Promo code Expired";
                $status = false;
            }
        } else {
            $message = "Enter Vaild Promo Code";
            $status = false;
        }
        return response()->json(['message' => $message, 'status' => $status,'data'=>$is_promocode]);
    }
}
