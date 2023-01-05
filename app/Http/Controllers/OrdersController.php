<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders/index', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The writer',
            'orders' => Order::all()
            // 'total' => $total
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create([
            'user_id'=>$request->user_id,
            'cart_id'=>$request->cart_id,
            'payment_id' => $request->payment_id,
            'bukti_transfer' => $request->file('bukti_transferphoto')->store('bukti_transferphotos', 'public'),
            'total_price' => $request->total_price,
            'wa_number' => $request->wa_number,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user->load('cart');
        return view('checkout_three', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The writer',
            'user' => $user,
            'payments' => Payment::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("orders/partials/update-orders-form", [
            "orders"=>Order::findOrFail($id),
            "pagetitle"=>"Update book"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $order = Order::findOrFail($id);

        $order->update([
            "status" => $request->status,
        ]);
        if ($order->status == 'yes') {
            
            $orders = Order::findOrFail($id);

            $orders->delete();
        } else {

        }
        return redirect("/admin_order");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Payment::findOrFail($id);

        $orders->delete();

        return redirect("/admin_order");
    }
}
