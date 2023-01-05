<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentsRequest;
use App\Http\Requests\UpdatePaymentsRequest;
use App\Models\Payment;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payments/index', [
            'pagetitle' => 'Writers',
            'maintitle' => 'Writers in My Library',
            'payments' => Payment::all(),
            
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
    public function store(StorePaymentsRequest $request)
    {
        Payment::create([
            'payment_method' => $request->payment_method,
            'account_number' => $request->account_number,
        ]);

        return redirect('/admin_payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment )
    {
        return view('checkout_two', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The writer',
            'payment' => $payment,
            'payments' => Payment::all(),
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("payments/partials/update-payments-form", [
            "payment"=>Payment::findOrFail($id),
            "pagetitle"=>"Update Category"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentsRequest $request, $id)
    {
        $payment = Payment::findOrFail($id);

        $payment->update([
            "payment_method" => $request->payment_method,
            "account_number" => $request->account_number,
        ]);
        return redirect("/admin_payment");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);

        $payment->delete();

        return redirect("/admin_payment");
    }
}
