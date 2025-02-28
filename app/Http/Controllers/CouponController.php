<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('backend.coupon.index',[
            'coupons' => $coupons,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|unique:coupons',
            'discount_type' => 'required',
            'discount' => 'required',
            'quantity' => 'required',
            'expire_date' => 'required',
        ]);

        if($request->status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
        $expire_date = Carbon::createFromFormat('d/m/Y', $request->expire_date)->format('Y-m-d');

        $couponCode = str_replace(' ', '_', $request->coupon_code);

        Coupon::create([
            'coupon_code' => $couponCode,
            'discount_type' => $request->discount_type,
            'discount' => $request->discount,
            'min_amount' => $request->min_amount,
            'quantity' => $request->quantity,
            'expire_date' => $expire_date,
            'status' => $status,
        ]);

        return redirect()->route('coupon.index')->with('success', 'Coupon created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coupon = Coupon::find($id);
        return view('backend.coupon.edit',[
            'coupon' => $coupon,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'coupon_code' => 'required|unique:coupons,coupon_code,'.$id,
            'discount_type' => 'required',
            'discount' => 'required',
            'quantity' => 'required',
            'expire_date' => 'required',
        ]);

        if($request->status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }

        $expireDate = Carbon::createFromFormat('d/m/Y', $request->expire_date)->format('Y-m-d');

        $coupon = Coupon::find($id);
        $coupon->update([
            'coupon_code' => $request->coupon_code,
            'discount_type' => $request->discount_type,
            'discount' => $request->discount,
            'min_amount' => $request->min_amount,
            'quantity' => $request->quantity,
            'expire_date' => $expireDate,
            'status' => $status,
        ]);

        return redirect()->route('coupon.index')->with('success', 'Coupon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coupon = Coupon::find($id);
        try {
            $coupon->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Coupon Deleted Successfully'], 200);
    }

    public function status_update($id)
    {
        $coupon = Coupon::find($id);
        try {
            $coupon->update([
                'status' => $coupon->status == 0 ? 1 : 0,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Coupon Status Updated Successfully'], 200);
    }
}
