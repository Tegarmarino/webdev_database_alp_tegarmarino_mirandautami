<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewsRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reviews/index', [
            'pagetitle' => 'Writers',
            'maintitle' => 'Writers in My Library',
            'reviews' => Review::all()
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

        Review::create([
            'user_id'=>$request->user_id,
            'product_id' => $request->product_id,
            'review' => $request->review,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function show(Review $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("reviews/partials/update-review-form", [
            "reviews"=>Review::findOrFail($id),
            "pagetitle"=>"Update book"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        $review->update([
            "review" => $request->review,
            "status" => $request->status,
        ]);

        return redirect("/admin_review");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        $review->delete();

        return redirect("/admin_review");
    }
}
